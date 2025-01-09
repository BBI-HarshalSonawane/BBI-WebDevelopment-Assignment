

const Promise = require('promise');
const MongoClient = require('mongodb').MongoClient;
const url = 'mongodb://localhost/TestDB';
MongoClient.connect(url)
    .then(function (err, db) {
        db.collection('Test').updateOne({
            "Name": "Joe"
        },
            {
                $set: {
                    "Name": "Beck"
                }
            });
    })
    .catch(error => alert(error.message))




// In this case we assume the url is wrong
// MongoError ❌ : failed to connect to server [localhost:27017]