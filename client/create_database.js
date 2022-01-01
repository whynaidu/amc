var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "sanket",
  database: "AMC"
});
con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = `INSERT INTO complalint (date, time, complaint_type, discription, contact_name, contact_number, user) VALUES (NOW(), NOW(), "${complaint_type}", "${l_name}", "${f_name}", "${customer_number}", 'vedant')`;
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });

  
});