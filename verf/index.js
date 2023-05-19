const nodemailer = require('nodemailer');

// Configuration pour le transport SMTP
const smtpTransport = nodemailer.createTransport({
  host: 'smtp.gmail.com',
  port: 465,
  secure: true, // utilise SSL
  auth: {
    user: 'se552733@gmail.com',
    pass: 'xcewnulejdircywv'
  }
});

// Utilisation du transport pour envoyer un e-mail
smtpTransport.sendMail({
  from: 'se552733@gmail.com',
  to: 'se552733@gmail.com',
  subject: 'Une nouvelle commande',
  text: ' Bonjour, Pouvez vous me confirmer que vous avez bien reçu ma commande'
}, (err, info) => {
  if (err) {
    console.error('Erreur lors de l\'envoi de l\'e-mail :', err);
  } else {
    console.log('E-mail envoyé avec succès :', info);
  }
});