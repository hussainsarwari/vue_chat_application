<template>
    <div class="msg_box">
        You are registered !
    </div>
  <div class="container">
    <form  method="post" @submit.prevent="sent_data(this.data)">
      <h3>Register <span>Page</span></h3>
      <input
        type="text"
        placeholder="user_name"
        required
        id="firstname"
        name="username"
        v-model="this.data.user_name"
      />
      <input
        type="text"
        placeholder="Name"
        required
        id="lastname"
        name="name"
        v-model="this.data.name"
      />
      <input
        type="text"
        placeholder="Father Name"
        required
        id="fathername"
        name="fathername"
        v-model="this.data.father_name"
      />
      <input
        type="text"
        placeholder="Address"
        required
        id="address"
        name="address"
        v-model="this.data.user_address"
      />
      <input
        type="email"
        placeholder="email"
        required
        id="email"
        name="email"
        v-model="this.data.email"
      />
      <input
        type="number"
        placeholder="phone"
        required
        id="phone"
        name="phone"
        v-model="this.data.phone"
      />
      <input
        type="text"
        placeholder="education"
        required
        id="education"
        name="education"
        v-model="this.data.education"
      />
      <input type="date" placeholder="Birth" required id="birth" name="birth" v-model="this.data.birth"/>
      <select name="country" id="country" v-model="this.data.country">
        <option value="Afghanistan">Afghanistan</option>
        <option value="Iran">Iran</option>
        <option value="Pakistan">Pakistan</option>
      </select>
      <select name="gender" id="gender" v-model="this.data.gender">
        <option value="male">male</option>
        <option value="female">female</option>
      </select>
      <input
        type="text"
        placeholder="facebook"
        required
        id="facebook"
        name="facebook"
        v-model="this.data.facebook"
      />
      <input
        type="text"
        placeholder="instagram"
        required
        id="instagram"
        name="instagram"
        v-model="this.data.instagram"
      />
      <input
        type="text"
        placeholder="linkedln"
        required
        id="linkedli"
        name="linkedli"
        v-model="this.data.linkedln"
      />
      <input
        type="text"
        placeholder="whatsapp"
        required
        id="whatsapp"
        name="whatsapp"
        v-model="this.data.whatsapp"
      />
      <input type="text" placeholder="skype" required id="skype" v-model="this.data.skype" name="skype" />
      <input
        type="password"
        placeholder="password"
        required
        id="password"
        name="password"
        v-model="this.data.user_password"
      />
      <input
        type="password"
        placeholder="confirm password"
        required
        id="ConfirmPassword"
        name="confirmPassword"
      />
      <input class="btn btn-register" type="submit" value="Register" />
      <router-link to="/"
        ><button  class="btn btn-login">
          Login page
        </button></router-link
      >
    </form>
  </div>
</template>

<script>

import axios from "axios";

export default {
  data() {
    return {
      data: {
        type:'register',
        user_name: "",
        name:'',
        father_name:'',
        user_address:'',
        email:'',
        phone:null,
        education:'',
        birth:'',
        country:null,
        gender:'',
        facebook:'',
        instagram:'',
        whatsapp:'',
        skype:'',
        linkedln:'',
        user_password:''
      },
    };
  },

  methods: {
    sent_data(data) {
        let json=JSON.stringify(data);
      axios
        .post(
          "http://localhost:801/Vue_chat_appliction/src/php/index.php",
          json
        )
        .then((Response) => {
      //  add animation class to box message
            document.querySelector("#app > div.msg_box").classList.add("msg_animation");

            setTimeout(() => {
              // remove the animation class after 5 second
              document.querySelector("#app > div.msg_box").classList.remove("msg_animation");
        }, 5000);
         this.$router.push({name:'Login'});
        })
        .catch((err) => {
          console.log(err);
        });
    },


 
  },
};
</script>

<style scoped>
.msg_box{
    position: fixed;
    top: 1em;
    z-index: 2;
    WIDTH: 40%;
    HEIGHT: 4em;
    opacity: 0;
    background: rgb(6, 140, 230);
    text-align: center;
    color: #fff;
    display: grid;
    align-items: center;
    left: 30%;
    transition: all 2s ease-in ;

}
.msg_animation{
    animation: myanimation 3s ease-in-out both;
}
@keyframes myanimation {
    10%{
        top: 3em;
        opacity: 1;
    }
    80%{ top: 3em;
        opacity: 1;}
    100%{
        top: 1em;
        opacity: 0;
    }
}


::placeholder {
  padding: 1em;
  color: #333;
}
.btn {
  cursor: pointer;
}

select {
  border: none;
  background: #eeeeee;
  height: 3em;
  margin: 1em 0;
}
a {
  width: 25em;
  text-decoration: none;
  cursor: pointer;
}
input {
  margin: 1em 0;
  width: 35em;
  height: 3em;
  border: none;
  background: #eee;
}
.btn-login {
  background: #03a9f4;
  border: none;
  height: 3em;
  width: 35em;
  color: #fff;
}
.btn-register {
  border: 1px solid #03a9f4;
  height: 3em;
  width: 100%;
}

h3 {
  text-align: left;
  margin: 2em 0;
}
h3::after {
  content: "";
  content: "";
  width: 4em;
  display: block;
  height: 0.3em;
  background: #2196f3;
  border-radius: 2em;
  position: relative;
  top: 0.6em;
}
span {
  color: #2196f3;
}

form {
  display: grid;
  justify-content: center;
  align-content: stretch;
}
.container {
  width: 40em;
  background: #e6e6e6;
  margin: auto;
  position: relative;
  top: 3em;
  padding: 2em;
}
</style>
