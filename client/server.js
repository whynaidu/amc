var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var bodyParser = require('body-parser');
var flash = require('express-flash');
var session = require('express-session');
var db=require('./database');
const moment = require('moment');
var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended:  false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));
app.use('/css',express.static(__dirname + '/public/scc/'));
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
  res.render('complaint', { title: 'Add_Complaint' });
});
app.get('/complaints', function(req, res, next) {
  res.render('complaint', { title: 'Add_Complaint' });
});
  app.post('/addcomplaint', function(req, res, next) {
    var f_name = req.body.type;
    var l_name = req.body.Description;
    var email = req.body.c_name;
    var numbersd = req.body.c_number;
   
  
    var sql = `INSERT INTO complaint (Complaint_no, comp_Date, comp_time, complaint_type, Description, Contact_name, Contact_no, User) VALUES ("36322522","2021-10-10",Now(), "${f_name}", "${l_name}","${email}","${numbersd}","sanket")`;
    db.query(sql, function(err, result) {
      if (err) throw err;
   console.log('record inserted');
      req.flash('success', 'Data add successfully!');
      res.redirect('/');
    });
  });
  app.get('/getdata', function(req, res, next) {
    var sql = `SELECT * FROM complaint`;
    db.query(sql, function(err, result, fields) {
      if (err) throw err;
      res.render('complaint', { title: 'complaints', userData: result});
         });
  });

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
