data_file = 'data.json';
var router = (app,fs) =>{
	data_file='data.json';
	app.get('/data',(request, respond) =>{
		
		fs.readFile(data_file, (error, rdata) =>{
		if(error)
				throw error;
			respond.send(JSON.parse(rdata));
		});
		
	});
	

	app.get('/data/:id', (request, respond) =>{
		
	var tmpId =request.params["id"];
		
	});
	
	$.get('/data.json').done(data =>{
		console.log(data);
		const parseData = JSON.parse(data);
		console.log(parseData.name);
	});
	
};
module.exports = router;