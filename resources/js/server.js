let app = require('express')();
let http = require('http').createServer(app);

app.get('/', (req, res) => {
  res.sendFile(__dirname + 'message.blade.php');
});

http.listen(3000, () => {
  console.log('listening on *:3000');
});
