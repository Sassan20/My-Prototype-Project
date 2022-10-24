const mongoose = require('mongoose')


// Membuat Schema
const Contact = mongoose.model('User',{
  nama: {
    type: String,
    require: true
  },
  email: String,
  noHP: {
    type: String,
    require: true
  },
})

module.exports = Contact