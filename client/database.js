var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "sanket",
  database: "amc",
  timezone: 'utc' 
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});
module.exports = con;






