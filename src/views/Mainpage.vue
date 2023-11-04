<template>
  <div class="home">
    <nav>
      <span id="menu"><img @click="show_menu()" class='menu' src="../assets/img/img2.png" alt="menu"></span>
      <span id="profile"><a href="">
        <span id="profile_img">
        <img src="../assets/img/img3.jpg" alt="profile">
      </span>
    
        <router-link to="/Account" style="cursor: pointer;"><span id="username">{{ data.user_name }}</span></router-link>
       
      
      </a>
    <span id="active">offline</span>
    </span>
<span @click="open()" id="options_btn"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="230" viewBox="0 0 60 230">
  <g id="option" transform="translate(-255 -65)">
    <circle id="Ellipse_1" data-name="Ellipse 1" cx="30" cy="30" r="30" transform="translate(255 65)" fill="#fff"/>
    <circle id="Ellipse_2" data-name="Ellipse 2" cx="30" cy="30" r="30" transform="translate(255 150)" fill="#fff"/>
    <circle id="Ellipse_3" data-name="Ellipse 3" cx="30" cy="30" r="30" transform="translate(255 235)" fill="#fff"/>
  </g>
</svg>


</span>

<div  id="option_menu">
  <ul>
    <li>video call</li>
    <li>profile</li>
    <li>setting</li>
    <li>log out</li>
   
  </ul>
</div>

<span id="close" @click="close()">X</span>

    </nav>
    <!-- user section start -->
<Users user_data=true @animation-Event="animation()"/>
<!-- end of user section -->
<!-- start of chat page section -->
<Chat_page/>
  </div>
</template>

<script>
import axios from 'axios'



// @ is an alias to /src
import Users from '@/components/Users';
import Chat_page from '@/components/Chat_page';
export default {
  name: 'HomeView',
  components: {
    Users,
    Chat_page
  },
  data() {
    return {
      data:'',
      user_id:this.$store.state.user_id
    }

},
mounted() {
    
this.get_data()
        },
      
methods: {
 


  get_data() {
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/index.php",{
        })
        .then((Response) => {
        console.log(Response.data[2].user_name);
        for (let i = 0; i <=Response.data.length; i++) {
        if(Response.data[i].user_id==this.user_id){
          this.data=Response.data[i];
        
        }
          
        }
          //  console.log(Response.data[1].user_id);
        })
        .catch((err) => {
          console.log(err);
        });
    },



 show_menu(){
    document.querySelector("div.box").style.width='80%';
    // document.querySelector("div.chat").style.width='100%';
    document.querySelector("#app > div > nav").classList.remove("animation")
    document.querySelector("#m").classList.remove("animation")


 },




  animation(){
  
    document.querySelector("#app > div > nav").classList.add("animation")
  },
  open(){
    document.querySelector("#options_btn").style.display='none';
    document.querySelector("#option_menu").style.display='inline';
    document.querySelector("#close").style.display='inline';
  },
  close(){
    document.querySelector("#option_menu").style.display='none';
    document.querySelector("#close").style.display='none';
    document.querySelector("#options_btn").style.display='block';
  }
  },}
</script>
<style scoped>
nav.animation{
    animation: minimize2 .4s ease-out forwards;
}

@keyframes minimize2 {
    0%{
        width: 80%;
    }
    100%{
        width: 100%;
    }
}



.menu{
  width: 2em;
    position: absolute;
    left: 0.4em;
    top: 1em;
    cursor: pointer;
}

nav{
  float: right;
    padding: 0;
    width: 80%;
    background: #009688;
    height: 4em;
}
#profile_img{
  width: 3em;
    display: grid;
    height: 3em;
    border-radius: 100%;
    margin-top: .5em;
}
#profile_img img{
  
  border: 2px solid #fff;
  width: 3em;
  border-radius: 100%;
  height: 3em;
    margin: 0 2em;
}
#profile{
  position: relative;
    left: 3em;
    display: block;
    width: 10em;
}
#profile a{
  text-decoration: none;
    color: #fff;
}
#option_menu{
  position: absolute;
    right: 0em;
    top: 4em;
    background: #007272;
    width: 10em;
    height: 18em;
    display: none;
    cursor: pointer;
    z-index: 22222222222222;



}

#option_menu li{
  list-style: none;
  cursor: pointer !important;
  color: #fff;
    margin: 1px auto;
    padding: 1em 0 0 0;
}
#option_menu li::after{
  content: '';
  background: #d6d206;
  width: 0;
  height: .2em;
  border-radius:0  10em 10em 0;
  display: block;
  margin: 1em 0;
  transition: all .5s ease-in-out;
}
#option_menu li:hover::after{
  content: '';
  width: 80%;
  height: .2em;
}
#option_menu li:hover{
  cursor: pointer;
 color: #e9e9e9;
 background: #333;
}
#close{
  position: absolute;
    right: 0.7em;
    color: #fff;
    font-size: 2.5em;
    top: 0.2em;
    cursor: pointer;
    display: none;
}

#username{
  position: absolute;
    top: 0.4em;
    font-size: 0.8em;
    left: 7.4em;
    width: 15em;
    text-align: left;
}
#active{
  position: absolute;
    font-size: 10px;
    top: 27px;
    text-align: left;
    left: 95px;
    color: aliceblue;
}
svg{
  height: 2em;
    position: absolute;
    right: 2em;
    cursor: pointer;
    width: 1em;
    top: 1em;
    fill: #fff !important;
}

</style>
