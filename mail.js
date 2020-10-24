
var nodemailer = require('nodemailer');
const csv = require('csvtojson/v1');

var transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: 'syihabudin234@gmail.com',
        pass: 'uvavlkyxqudasjst'
    }
});

var testfile = 'list_email.csv'; //my test list
var prodfile = 'list.csv'; //path to our production list
var sendlist = []; // empty array where we'll keep //all our contacts

var mailOptions = {
    from: 'adesehab10@gmail.com',
    to: 'syihabudin234@gmail.com', //email address of our recipient
    subject: 'Sending Email using Nodejs',
    text: 'That was easy!'
};

transporter.sendMail(mailOptions, (err, info) => {
    if (err) throw err;
    console.log('Email sent: ' + info.response);
});

