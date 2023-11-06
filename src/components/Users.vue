<template>
  <div id="m">
    <input
      @click="show_users"
      type="search"
      v-model="search"
      autocomplete="none"
      name="search"
      id="search"
      placeholder="search"
    />
    <div class="usersList" v-if="users">
      <ul>
        <li>
          <button
            @click="users = false"
            type="button"
            style="
              width: 100%;
              height: 3em;
              position: absolute;
              top: 0.5em;
              left: 0em;
              color: #fff;
              cursor: pointer;
            "
          >
            close
          </button>
        </li>
        <li
          v-for="e in this.allUsers"
          :key="this.user_id"
          style="
            border-bottom: 1px solid #2196f3;
            height: 4.6em;
            margin: 1em 0;
            list-style: none;
          "
          v-show="e.user_name.includes(this.search)"
        >
          <span id="profile"
            ><img style="left: -5em" src="../assets/img/img5.jpg" alt="profile"
          /></span>

          <keep-alive>
            <router-link
              to="/Account"
              @click="this.$store.state.anotheruserid = e.user_id"
              style="cursor: pointer !important; all: unset"
              ><span
                id="username"
                style="
                  display: block;
                  position: relative;
                  bottom: 3em;
                  left: 4.3em;
                  font-size: 0.8em;
                  color: #fff;
                  text-align: start;
                  border-bottom: 1px;
                "
                >{{ e.user_name }}</span
              ></router-link
            >
          </keep-alive>

          <span id="add"
            ><button @click="add_friend(userData, e.user_id)">+</button>
          </span>
          <span id="state" style="left: -2.4em">online</span>
        </li>
      </ul>
    </div>

    <div class="users">
      <h4>My Friends {{ $store.state.user_id }}</h4>
      <div class="friends">
        <!-- {{JSON.stringify( data) }} -->
        <ul>
          <li v-for="e in this.data" :key="this.user_id">
            <span id="profile"
              ><img src="../assets/img/img3.jpg" alt="profile"
            /></span>

            <keep-alive>
              <router-link
                to="/Account"
                @click="this.$store.state.anotheruserid = e.user_id"
                style="cursor: pointer; all: unset"
                ><span style="color: #fff" id="username">{{
                  e.user_name
                }}</span></router-link
              >
            </keep-alive>

            <span id="state">online</span>
          </li>
        </ul>
      </div>
      <span @click="minimize()" id="minimize">Minimize</span>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  props: ["user_data","refresh","requestor_id"],
  data() {
    return {
      refresh:this.refresh,
      flag: this.user_data,
      requestor_id:this.requestor_id,
      data: [],
      user_id: this.$store.state.user_id,
      friends_id: [],
      allUsers: {},
      users: false,
      search: "",
      userData: {
        type: "F_request",
        requestor: this.$store.state.user_id,
        getter: "",
      },
    };
  },
  mounted() {
    if (this.flag) {
      this.get_friends_id();
      this.get_friends();
    }
  },

watch:{
    refresh(){
      //this.data = myfriends
      let flag=false;// check the person is in friend list or not
      for (let x = 0; x < this.data.length; x++) {
             if (this.requestor_id == this.data[x].user_id) {
              flag=true;
             }}

if (!flag) {// run if person is not in friends list
  for (let x = 0; x < this.allUsers.length; x++) {
             
        
             if (this.requestor_id == this.allUsers[x].user_id) {
               
     
                     this.data.push(this.allUsers[x]);
                   }
                 }
}
    

      // console.log(this.requestor_id);
      // console.log(this.allUsers);
      // this.get_friends_id();
      // this.get_friends();
    }
},

  methods: {
    add_friend(data, id) {
      //sent friend request function
      this.userData.getter = id;
      let json = JSON.stringify(data);
      console.log(json);
      axios
        .post(
          "http://localhost:801/Vue_chat_appliction/src/php/index.php",
          json
        )
        .then((Response) => {
          console.log(Response);
        })
        .catch((err) => {
          console.log(err);
        });
    },

    show_users() {
      this.users = true;
    },

    get_friends_id() {
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/friends.php", {})
        .then((Response) => {
          // console.log(Response.data[1].user_id);
          for (let i = 0; i < Response.data.length; i++) {
            if (Response.data[i].user_id == this.user_id) {
              this.friends_id.push(Response.data[i].friends_id);
              // console.log(this.friends_id);
            }
          }

          // this.friends_id=Response.data

          //  console.log(Response.data[1].user_id);
        })
        .catch((err) => {
          console.log(err);
        });
    },

    get_friends() {
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/index.php")
        .then((Response) => {
          let b = Object.entries(Response.data);
          for (let i = 0; i < this.friends_id.length; i++) {
            for (let x = 0; x < b.length; x++) {
              if (this.friends_id[i] == b[x][1].user_id) {
                //  debugger

                this.data.push(b[x][1]);
              }
            }
          }
          this.allUsers = Response.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },

    minimize() {
      this.$emit("animationEvent");
      document.querySelector(".box").style.width = "100%";
      //    document.querySelector('.chat').style.width='100%'
      document.querySelector("div#m").classList.add("animation");
    },
  },
};
</script>

<style scoped>
.usersList {
  overflow: hidden;
  overflow-y: auto;
  width: 98%;
  position: absolute;
  background: #333;
  z-index: 22;
  padding: 1em;
  height: 39vw;
  color: #fff;
  display: grid;
  top: 2.5em;
}

div.animation {
  animation: minimize 0.5s ease-out forwards;
}

#minimize {
  width: 100%;
  display: block;
  position: relative;
  top: 0.7em;
  left: 0em;
  cursor: pointer;
  background: #007da8;
  padding: 0.5em;
}
#minimize::after {
  content: "";
  width: 11em;
  display: block;
  height: 2.8em;
  background: #221717;
  position: relative;
  bottom: 1.7em;
  cursor: pointer;
  left: -17em;
  border-radius: 0 9em;
  transition: all 0.4s ease-in;
}
#minimize:hover::after {
  content: "Close";
  width: 17.5em;
  text-align: center;
  display: block;
  height: 2.8em;
  background: #262023;
  position: relative;
  bottom: 1.7em;
  left: -1em;
  border-radius: 0 0em;
  display: grid;
  align-items: center;
  justify-items: stretch;
}
.friends {
  overflow: auto;
  width: 100%;
  height: 29em;
  overflow-x: hidden;
}

::-webkit-scrollbar {
  background: #013e38;
  width: 0.4em;
}
::-webkit-scrollbar-thumb {
  border-radius: 2em;
  background: #2196f3;
}

.friends li {
  background: #009688;
  height: 4em;
  border-bottom: 3px solid #2196f3;
  margin: 1em 0;
  cursor: pointer;
  transition: all 0.3s ease;
}
.friends li:hover {
  background: #03ad9c;
}

span#profile img {
  width: 3em;
  border-radius: 100%;
  height: 3em;
  border: 3px solid;
  position: relative;
  top: 0.5em;
  left: -6em;
}

#username {
  display: block;
  position: relative;
  bottom: 3em;
  left: 6.7em;
  font-size: 0.8em;
  text-align: start;
}
#state {
  position: relative;
  left: -1.4em;
  bottom: 38px;
  font-weight: 800;
}
.users {
  width: 100%;
  margin: 4em 0;
  color: #e8e8e8;
}
h4::after {
  content: "";
  display: block;
  height: 0.2em;
  border-radius: 0 1em 1em 0;
  width: 70%;
  background: #2196f3;
  margin-top: 0.7em;
}
form {
  position: relative;
  top: 2em;
  width: 90%;
  margin: auto;
}
input[type="search"] {
  height: 2.9em;
  background: #0a665d;
  border: none;
  border-bottom: 1px solid #2196f3;
  width: 97%;
  transition: all 0.2s ease;
  color: #fff;
  padding: 0 1em;
}
input[type="search"]:focus-visible {
  border: none;
  outline-style: none;
  border-bottom: 3px solid #0082ec;
}
::placeholder {
  color: #fff;
  padding: 0 1em;
}
.search {
  width: 2em;
  position: relative;
  top: 3px;
  right: -1px;
  transform: rotate(263deg);
}
button {
  position: relative;
  top: -41px;
  background: none;
  border: none;
  cursor: pointer;
  width: 3em;
  height: 3em;
  transition: all 0.2s ease;
  background: #0082ec;
  right: -99px;
}
button:hover {
  background: #07c8d6;
  width: 3em;
  height: 3em;
}
#m {
  width: 20%;
  position: fixed;
  background: #00766b;
  height: 100vh;
}

@keyframes minimize {
  0% {
    left: 0;
  }
  100% {
    left: -20em;
  }
}
</style>
