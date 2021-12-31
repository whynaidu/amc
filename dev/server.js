var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var bodyParser = require('body-parser');
var flash = require('express-flash');
var session = require('express-session');
var db=require('./database');


var app = express();
 
// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extend: false}));
 
app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(__dirname + 'public/*'));
app.use('/scc',express.static(__dirname + '/public/scc/'));
app.use('/javascripts',express.static(__dirname + '/public/javascripts/'));
app.use('/images',express.static(__dirname + '/public/images'));
app.use('/vendor',express.static(__dirname + '/public/vendor/global/'));



app.use(session({ 

    secret: '123456catr',
    resave: false,
    saveUninitialized: true,
    cookie: { maxAge: 60000 }
}))
 
app.use(flash());
 
/* GET home page. */
app.get('/', function(req, res, next) {
  res.render('index', { title: 'AMC Home' });
});
app.get('/addcomplaints', function(req, res, next) {
  res.render('AddComplaint', { title: 'Add Complaint' });
});
app.get('/complaint', function(req, res, next) {
  res.render('complaint', { title: 'Complaints' });
});
 
app.post('/addcomplaint', function(req, res, next) {
  var complaint_type = req.body.complaint_type;
  var customer_name = req.body.customer_name;
  var complaint_discription = req.body.complaint_discription;
  var customer_number = req.body.customer_number;

 
  var sql = `INSERT INTO complaints (date, time, complaint_type, discription, contact_number, contact_no, user, status) 
                          VALUES (NOW(), NOw(), "${complaint_type}", "${complaint_discription}", "${customer_name}", "${customer_number}" , 'vedant', 'closed')`;
  db.query(sql, function(err, result) {
    if (err) throw err;
    console.log (sql)
    console.log('record inserted');
    res.redirect('/getdata');
  });
});

app.get('/getdata', function(req, res, next) {
  var sql = `SELECT * FROM complaints`;
  db.query(sql, function(err, result, fields) {
    if (err) throw err;
    res.render('complaint', { title: 'complaints', userData: result});
  });
})
 
// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});
 
// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};
 
  // render the error page
  res.status(err.status || 500);
  res.render('error');
});
 
// port must be set to 3000 because incoming http requests are routed from port 80 to port 8080
app.listen(3000, function () {
    console.log('Node app is running on port 3000');
});
 
module.exports = app;