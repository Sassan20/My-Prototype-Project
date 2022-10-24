// module
const express = require('express')
const app = express()
const expressLayouts = require('express-ejs-layouts')
const { body, validationResult, check } = require('express-validator')
const session = require('express-session')
const cookieParser = require('cookie-parser')
const flash = require('connect-flash')
const methodOverride = require('method-override')
require('./utils/contacts')
const Contact = require('./data/User')

// middleware
app.set('view engine', 'ejs')
app.use(expressLayouts)
app.use(express.static('public'))
app.use(express.urlencoded({
  extended: true
}))
app.use(methodOverride('_method'))

// konfigurasi flash
app.use(cookieParser('secret'))
app.use(session({
  cookie: { maxAge: 6000 },
  secret: 'secret',
  resave: true,
  saveUninitialized: true
})
)
app.use(flash())

const port = 3000

// Halaman Home
app.get('/', (req, res) => {
  const mhs = [{
    nama: 'fadil',
    email: 'gatau@gmail.com'
  },
  {
    nama: 'agus',
    email: 'agus@gmail.com'
  },
  {
    nama: 'dika',
    email: 'dika@gmail.com'
  }
  ]
  res.render('index', {
    nama: 'fadil',
    title: 'Halaman Home',
    layout: 'layouts/main-layout',
    mhs
  })
})

// Halaman About
app.get('/about', (req, res) => {
  res.render('about', {
    title: 'halaman about',
    layout: 'layouts/main-layout'
  })
})

// Halaman Contact
app.get('/contact', async (req, res) => {
  const contacts = await Contact.find()
  res.render('contact', {
    title: 'halaman contact',
    contacts: contacts,
    layout: 'layouts/main-layout',
    msg: req.flash('msg')
  })
})

// Halaman form tambah kontak
app.get('/contact/add', (req, res) => {
  res.render('add-contact', {
    layout: 'add-contact',
    title: 'Form Tambah Data Contact',
  })
})

// Proses Tambah Data kontak
app.post('/contact', [body('nama').custom(async (value) => {
  const duplikat = await Contact.findOne({ nama: value })
  if (duplikat) {
    throw new Error('Nama Sudah Digunakan')
  }
  return true
}),
check('email', 'Email Tidak Valid').isEmail(),
check('noHP', 'Nomor HP Tidak Valid').isMobilePhone('id-ID')], (req, res) => {
  const errors = validationResult(req)
  if (!errors.isEmpty()) {
    // return res.status(400).json({ errors: errors.array() })
    res.render('add-contact', {
      title: 'Form Tambah Data Contact',
      layout: 'add-contact',
      errors: errors.array()
    })
  } else {
    Contact.insertMany(req.body, (err, result) => {
      req.flash('msg', 'Data contact berhasil ditambahkan')
      res.redirect('/contact')
    })
  }
})

// Halaman contact detail
app.get('/contact/:nama', async (req, res) => {
  const contact = await Contact.findOne({ nama: req.params.nama })
  res.render('detail', {
    layout: 'detail',
    title: 'halaman detail contact',
    contact: contact,
  })
})

// Halaman Form Edit data Contact
app.get('/contact/update/:nama', (req, res) => {
  const contact = Contact.findOne(req.params.nama)
  res.render('edit-contact', {
    title: 'Form Ubah Data Contact',
    layout: 'edit-contact',
    contact
  })
})

// Proses ubah Data kontak
app.put('/contact', [body('nama').custom(async (value, { req }) => {
  const duplikat = await Contact.findOne({ nama: value })
  if (value !== req.body.oldName && duplikat) {
    throw new Error('Nama Sudah Digunakan')
  }
  return true
}),
check('email', 'Email Tidak Valid').isEmail(),
check('noHP', 'Nomor HP Tidak Valid').isMobilePhone('id-ID')], (req, res) => {
  const errors = validationResult(req)
  if (!errors.isEmpty()) {
    res.render('edit-contact', {
      title: 'Form Ubah Data Contact',
      layout: 'edit-contact',
      errors: errors.array(),
      contact: req.body
    })
  } else {
    Contact.updateOne(
      { _id: req.body._id },
      {
        $set: {
          nama: req.body.nama,
          email: req.body.email,
          noHP: req.body.noHP
        }
      }
    ).then(result => {
      req.flash('msg', 'Data contact berhasil diubah')
      res.redirect('/contact')
    })
  }
})

// Proses delete contact
app.delete('/contact', (req, res) => {
  Contact.deleteOne({ nama: req.body.nama }).then(result => {
    req.flash('msg', 'Data contact berhasil dihapus')
    res.redirect('/contact')
  })
})

app.listen(port, () => {
  console.log(`Example app listening on http://localhost:${port}`)
})