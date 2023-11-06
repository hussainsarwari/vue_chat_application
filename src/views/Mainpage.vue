<template>
  <div class="home">
    <nav>
      <span id="menu"><img @click="show_menu()" class='menu' src="../assets/img/img2.png" alt="menu"></span>
      <span id="profile"><a href="">
        <span id="profile_img">
        <img src="../assets/img/img3.jpg" alt="profile">
      </span>
    <keep-alive>
    
      <router-link to="/Account" @click="this.$store.state.anotheruserid=data.user_id" style="cursor: pointer;"><span id="username">{{ data.user_name }}</span></router-link>
    </keep-alive>
       
      
      </a>
    <span id="active">offline</span>
    </span>
<span @click="open() " id="options_btn"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="230" viewBox="0 0 60 230">
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
  <li>
    <keep-alive>
            
            <router-link  to="/Account"  @click="this.$store.state.user_id=this.data.user_id" style="
    cursor: pointer;
     all: unset;   
    width: 100%;
    display: block;
    height: 1.5em" ><span style="color: #fff;" > profile</span></router-link>
          </keep-alive>    
        </li>

          <li @click="  this.req_box_flag=true;">Requests <span style="color: #eeff00;"> {{ requests.count }}</span></li>
        
        <!-- show requests box -->
          <div class="requests-box" v-show="req_box_flag">
          <h1>
            Requests
            <span @click="close_re_box" class="btn-close-request-box">X</span>
          </h1>
          <hr>
    




          <ul style="
                overflow: hidden auto;
                height: 20em;
    ">
            <li class="requests-list"
            v-for="e in requests.requestor"
            :key="this.user_id">
          
           <span id="request-img-profile"><img src="../assets/img/img5.jpg" alt="profile"/></span>
       <keep-alive>
              
                <router-link to="/Account"  @click="this.$store.state.anotheruserid=e.user_id">
                  <span id="request-username"   >{{ e.user_name }}</span></router-link>
              </keep-alive>

          
              <span id="state" style="left: -2.4em;">online</span>
              <span id="accept" ><button class="btn-close-request-box" @click="accept_req(e.user_id)">+</button> </span>
              <span id="accept" ><button class="btn-close-request-box remove-request" @click="remove_req(e.user_id)">-</button> </span>
        
          </li>
          </ul>
        </div>
   
    <li>log out</li>
   
  </ul>
</div>

<span id="close" @click="close()">X</span>

    </nav>
    <!-- user section start -->
<Users user_data=true :refresh=this.refresh :requestor_id="this.req_response.requestor_id"  @animation-Event="animation()"/>
<!-- end of user section -->
<!-- start of chat page section -->
<Chat_page/>
  </div>
</template>

<script>
import axios from 'axios'
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
      refresh:false,//it uses for refresh the friends list when accept the friend request
     allUsers:[],
     req_response:{
      type:'req_response',
      Response:'',
      requestor_id:'',
      user_id:this.$store.state.user_id
     },
    req_box_flag:false,
    //  user_id:this.$store.state.user_id,
     user_id:this.$store.state.user_id,
     requests:{
        count:0,
        requestor_id:[],
        requestor:[]
      },
      data2:{type:'get_Request'},
      data:'',
      
    }

},
mounted() {
  this.get_data();
  

        },
methods: {
  accept_req(id){
 this.req_response.Response='accept';
 this.req_response.requestor_id=id
// console.log(this.req_response);
 let json=JSON.stringify(this.req_response);
//  console.log(json)
    
    axios
      .post(
        "http://localhost:801/Vue_chat_appliction/src/php/index.php",
        json
      )
      .then((Response) => {
      
      // console.log(Response);
      if (Response.status==200) {
        if (this.refresh) {
          
          this.refresh=false
        }else this.refresh=true

      }
        })
      .catch((err) => {
        console.log(err);
      });
  },
  remove_req(id){
 this.req_response.Response='remove'
  },
  close_re_box(){
 this.req_box_flag=false;
  },
  readRequest(data){//this function find how many user send friend request

    // console.log(this.data);
      let json=JSON.stringify(data);
    
      axios
        .post(
          "http://localhost:801/Vue_chat_appliction/src/php/index.php",
          json
        )
        .then((Response) => {
          let res=Response.data;
          for (let key=0 ; key < res.length   ; key++) {
            if(res[key]['request_getter']==this.user_id){
              this.requests.count++;
              this.requests.requestor_id.push(res[key]['requestor'])
            }}
          if(this.requests.count==0){
              // debugger
              console.log('you dont have friend request !');
            }
            this.findrequestor(this.allUsers,this.requests.requestor_id);
            // debugger;
          })
        .catch((err) => {
          console.log(err);
        });
},
  findrequestor(d,id){//this function find which user send friend request 
  
   
          // d = all users
          // id = requestor id
        for (let e=0; e< d.length;e++) {
      
     
          for (let el=0; el< id.length;el++) {
        
           if (id[el]==d[e].user_id) {
       
            this.requests.requestor.push(d[e])
            
           }
        
            // console.log('these are requestor id :',id[el]);
            // // console.log('these are user id :',this.e);
            // console.log('these are user id :',d[e].user_id);
      }}

      // console.log(this.requests);
      // debugger

  },
  get_data() {//this function get all user and save it in all user and also get user data
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/index.php",{
        })
        .then((Response) => {
          this.allUsers=Response.data;
        for (let i = 0; i <Response.data.length; i++) {
        if(Response.data[i].user_id==this.user_id){
          this.data=Response.data[i];
        
        }
          
      }
     
      this.readRequest(this.data2);
         
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
.remove-request{
  background:#E91E63 !important;
}
.requests-list{
  background: #9E9E9E;
    display: grid;
    text-align: center;
    padding: 1em !important;
    height: 5em;
    margin: 0.5em 0 !important;
    justify-items: center;
    grid-template-columns: 25% 20% 20% 20% 10%;
    justify-content: space-around;
    align-items: center;
} 
.requests-list:hover{
  background:#c3c3c3 !important;
}
#request-img-profile img{
  width: 3em;
}
.requests-list button{
  border: none !important;
  outline: none !important;
  right: 0 !important;
  padding: 1em !important;
}
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

.requests-box{
  transform: translateX(-121%);
    position: absolute;
    top: 4em;
    width: 44em;
    background: #dadada;
    height: 25em;
}
.requests-box > h1{
  display: block;
    padding: 1em 0;
    align-content: center;
    height: 3em;
}
.btn-close-request-box{
  position: relative;
    right: -11em;
    color: #fff;
    background: #2196F3;
    padding: 0.4em 0.7em;
    cursor: pointer;
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
