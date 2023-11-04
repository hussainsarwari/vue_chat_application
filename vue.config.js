
const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
devServer:{
proxy:'http://localhost:801'
},



  publicPath: process.env.NODE_ENV === 'production'
? '' 
: '/',
  transpileDependencies: true
})
