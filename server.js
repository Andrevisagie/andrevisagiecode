var express = require('express');
var bodyParser = require('body-parser');
var fs = require('fs');

var app = express();
var routes = require('./routes.js')(app,fs);
app.use(bodyParser.json())

app.use(bodyParser.urlencoded({extend:false}))

var port = process.env.PORT || 3000;
app.listen(port);
console.log('Servering running on port ' + port);

app.get('/', function ( request, respond){
	respond.send('Hello, Worsssandred!')
	
})
