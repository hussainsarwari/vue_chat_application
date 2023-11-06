<template>
  <div class="container">
    <div class="alert_box">your password or username is not correct !</div>
    <form @submit="get_data" method="post">
      <h3>Login <span>Page</span></h3>
      <input
        class="input"
        type="text"
        placeholder="Username or email"
        v-model="this.users_data.usernameOremail"
        required
        id="username"
        autocomplete="name"
        name="username"
      />
      <input
        class="input"
        type="password"
        name="password"
        id="password"
        v-model="this.users_data.password"
        placeholder="Password"
        autocomplete="current-password"
      />
      <span>Forget your password?</span>

      <input class="btn btn-login" @click="get_data" value="Login" />
      <router-link to="/Register">
        <button class="btn btn-register">Register</button>
      </router-link>
    </form>
    <!-- <div>{{ Re}}</div> -->
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      users_data: {
        usernameOremail: "",

        password: "",
      },
      response_data: {
        username: "",
        password: "",
        email: "",
      },
      // this flag use for aothantication and redirection to account page
      flag: false,
    };
  },

  methods: {
    get_data() {
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/index.php", {})
        .then((Response) => {
          // save the response data to a variable
          this.response_data = Response.data;
          // read each element of response_data array
          let counter = 1;
          this.response_data.some((e) => {
            // this flag use for break the loop if username and password is correct
            let f = false;
            let flag2 = true; //this flag checks if username and password is not correct show an alert
            // check if username or email and password is correct or no?
            if (
              (e.user_name == this.users_data.usernameOremail ||
                e.email == this.users_data.usernameOremail) &&
              e.user_password == this.users_data.password
            ) {
              // redirect to user account page
              f = true;
              flag2 = false; //dont show alert because  username and passwrod is correct
              this.$store.state.user_id = e.user_id;
              this.$router.push({ name: "Mainpage" });
              this.flag = true; // this flag use for aothantication and redirection to account page
              return f; //username and password is correct so breack the loop !
            }

            if (flag2 && counter == this.response_data.length) {
              //checks the user found or not and check all users checked or not

              document
                .querySelector(".alert_box")
                .classList.add("alert_animation");
              setTimeout(() => {
                // remove the animation class after 5 second
                document
                  .querySelector(".alert_box")
                  .classList.remove("alert_animation");
              }, 5000);
              this.flag = false;
            }
            counter++;
          });
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>

<style scoped>
.input:focus-visible {
  border: none;
  outline: none;
  border-bottom: 2px solid #2196f3;
}

.alert_box {
  position: absolute;
  top: 1em;
  color: #fff;
  background: #e91e63;
  height: 4em;
  padding: 0 2em;
  display: grid;
  opacity: 0;
  z-index: 3;
  align-items: center;

  left: 3.5em;
}

.alert_animation {
  animation: myanimation 4s ease-in-out both;
}
@keyframes myanimation {
  30% {
    top: 3em;
    opacity: 1;
  }
  80% {
    top: 3em;
    opacity: 1;
  }
  100% {
    top: 1em;
    opacity: 0;
  }
}

::placeholder {
  padding: 1em;
  color: #333;
}

a {
  width: 25em;
  text-decoration: none;
  cursor: pointer;
}
input {
  margin: 2em 0;
  width: 30em;
  height: 3em;
  border: none;
  background: #eee;
  outline: none;
  transition: all 0.1s;
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

.btn {
  cursor: pointer;
}

.btn-login {
  text-align: center;
  background: #03a9f4;
  color: #fff;
}
.btn-register {
  border: 1px solid #03a9f4;
  height: 3em;
  width: 100%;
}
form {
  display: grid;
  justify-content: center;
  align-content: stretch;
}
.container {
  width: 30em;
  background: #e6e6e6;
  margin: auto;
  position: relative;
  top: 3em;
  padding: 1em;
}
</style>
