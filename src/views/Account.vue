<template>
  <router-link to="/Mainpage"><Button class="btn-back">Back</Button></router-link>
  <div class="container">
    <div class="profile_img_and_details">
      <h2 class="username">{{ data.user_name }}</h2>
      <i class="fa-solid fa-user"></i>
      <h5 class="state">online</h5>
      <img src="../assets/img/img5.jpg" alt="userImg" />
      <hr />
      <h3 class="a">Friends: <span>5</span></h3>
    </div>
    <div class="details">
      <!-- section1 = personal information -->
      <div class="section1">
        <h1>User 
            <span>information</span></h1>
        <div class="info">
          <div class="user_personal_info">
            <h4>Username: <span id="first_name">{{ data.user_name }}</span></h4>
            <h4>name: <span id="last_name">{{ data.name }}</span></h4>
          
            <address>
              <span>Address:</span>
             {{ data.user_address }}
            </address>
            <h4>Email: <span id="email">{{ data.email }}</span></h4>
            <h4>Phone Number: <span id="phone_number">{{ data.phone }}</span></h4>
          </div>

          <!-- user social media -->
          <div class="social_media">
            <h4 class="facebook">
              <svg
                width="100"
                height="100"
                viewBox="0 0 100 100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM53.5357 23.0167C50.6527 23.0971 47.6106 23.7911 45.4617 25.8328C43.687 27.4744 42.7929 29.8636 42.592 32.2519C42.5308 33.9602 42.5395 35.6729 42.5483 37.3849C42.5548 38.6688 42.5614 39.9524 42.5384 41.2334C41.7492 41.2392 40.9575 41.2375 40.1655 41.2359C39.1093 41.2337 38.0525 41.2315 37 41.2468C37 42.2691 37.0015 43.2928 37.003 44.3174C37.006 46.3696 37.0089 48.4256 37 50.482C38.0525 50.4973 39.1093 50.4951 40.1655 50.4929C40.9575 50.4913 41.7492 50.4897 42.5384 50.4954C42.5563 54.5705 42.553 58.6454 42.5497 62.7203C42.5455 67.8139 42.5414 72.9074 42.5786 78.0008C44.7444 77.9855 46.9056 77.9877 49.0675 77.9899C50.6892 77.9916 52.3112 77.9932 53.9359 77.9874C53.9493 73.403 53.9459 68.8222 53.9426 64.2414C53.9392 59.6605 53.9359 55.0796 53.9493 50.4954C55.0417 50.4897 56.1342 50.4913 57.2266 50.4929C58.6832 50.4951 60.1398 50.4973 61.5964 50.482C62.0502 47.4123 62.4369 44.3157 62.6504 41.2066C61.2093 41.2 59.7679 41.2 58.3266 41.2C56.8853 41.2 55.444 41.2 54.0029 41.1933C54.0029 40.656 54.002 40.1187 54.0012 39.5815C53.9987 37.9701 53.9962 36.359 54.0163 34.7474C54.2431 33.5059 55.5239 32.5583 56.7654 32.6387H62.6638C62.6772 29.4224 62.6772 26.2196 62.6638 23.0033C61.9032 23.0033 61.1427 23.0025 60.3821 23.0017C58.1002 22.9992 55.818 22.9967 53.5357 23.0167Z"
                  fill="black"
                />
              </svg>

             {{ data.facebook }}
            </h4>
            <h4 class="linkedin">
              <svg
                width="100"
                height="100"
                viewBox="0 0 100 100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM70.8607 70V54.5239C70.8607 46.2341 66.4341 42.3762 60.5277 42.3762C55.7617 42.3762 53.6325 44.9994 52.4401 46.836V43.0105H43.4662C43.5869 45.544 43.4662 70 43.4662 70H52.4416V54.9274C52.4416 54.1204 52.5027 53.3171 52.7395 52.7401C53.3889 51.1261 54.8642 49.4577 57.3433 49.4577C60.5903 49.4577 61.8883 51.9331 61.8883 55.5602V70H70.8607ZM52.4401 46.836V46.9235H52.3812C52.3986 46.8956 52.422 46.8647 52.4401 46.836ZM29 34.6627C29 32.0138 31.0078 30 34.0783 30C37.1495 30 39.0366 32.0138 39.0954 34.6627C39.0954 37.2535 37.1495 39.3284 34.0194 39.3284H33.9598C30.9504 39.3284 29 37.2535 29 34.6627ZM38.5048 70H29.5332V43.0105H38.5048V70Z"
                  fill="black"
                />
              </svg>
              {{ data.linkedln }}
            </h4>
            <h4 class="instagram">
              <svg
                width="100"
                height="100"
                viewBox="0 0 100 100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM25 39.3918C25 31.4558 31.4566 25 39.3918 25H60.6082C68.5442 25 75 31.4566 75 39.3918V60.8028C75 68.738 68.5442 75.1946 60.6082 75.1946H39.3918C31.4558 75.1946 25 68.738 25 60.8028V39.3918ZM60.6082 70.4317C65.9174 70.4317 70.2371 66.1121 70.2371 60.8028V39.3918C70.2371 34.0826 65.9174 29.7629 60.6082 29.7629H39.3918C34.0826 29.7629 29.7629 34.0826 29.7629 39.3918V60.8028C29.7629 66.1121 34.0826 70.4317 39.3918 70.4317H60.6082ZM36.9883 50.0054C36.9883 42.8847 42.8438 37.0922 50.0397 37.0922C57.2356 37.0922 63.0911 42.8847 63.0911 50.0054C63.0911 57.1252 57.2356 62.9177 50.0397 62.9177C42.843 62.9177 36.9883 57.1252 36.9883 50.0054ZM41.7422 50.0054C41.7422 54.5033 45.4641 58.1638 50.0397 58.1638C54.6153 58.1638 58.3372 54.5041 58.3372 50.0054C58.3372 45.5066 54.6145 41.8469 50.0397 41.8469C45.4641 41.8469 41.7422 45.5066 41.7422 50.0054ZM63.3248 39.6355C65.0208 39.6355 66.3956 38.2606 66.3956 36.5646C66.3956 34.8687 65.0208 33.4938 63.3248 33.4938C61.6288 33.4938 60.2539 34.8687 60.2539 36.5646C60.2539 38.2606 61.6288 39.6355 63.3248 39.6355Z"
                  fill="black"
                />
              </svg>
              {{ data.instagram }}
            </h4>
            <h4 class="whatsapp">
              <svg
                width="100"
                height="100"
                viewBox="0 0 100 100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM69.7626 28.9928C64.6172 23.841 57.7739 21.0027 50.4832 21C35.4616 21 23.2346 33.2252 23.2292 48.2522C23.2274 53.0557 24.4823 57.7446 26.8668 61.8769L23 76L37.4477 72.2105C41.4282 74.3822 45.9107 75.5262 50.4714 75.528H50.4823C65.5029 75.528 77.7299 63.301 77.7363 48.2749C77.7408 40.9915 74.9089 34.1446 69.7626 28.9928ZM50.4841 70.9246H50.475C46.4099 70.9228 42.4231 69.8306 38.9455 67.7671L38.118 67.2761L29.5441 69.525L31.8322 61.1658L31.2938 60.3082C29.0266 56.7015 27.8289 52.5337 27.8308 48.2531C27.8353 35.7633 37.9979 25.6025 50.4923 25.6025C56.5426 25.6043 62.23 27.9642 66.5069 32.2457C70.7839 36.5272 73.1374 42.2183 73.1356 48.2713C73.131 60.7629 62.9693 70.9246 50.4841 70.9246ZM62.9086 53.9588C62.2274 53.6178 58.8799 51.9708 58.2551 51.7435C57.6313 51.5161 57.1766 51.4024 56.7228 52.0845C56.269 52.7666 54.964 54.2998 54.5666 54.7545C54.1692 55.2092 53.7718 55.2656 53.0915 54.9246C52.9802 54.8688 52.8283 54.803 52.6409 54.7217L52.6406 54.7216C51.6816 54.3056 49.7905 53.4855 47.6151 51.5443C45.5907 49.7382 44.2239 47.5084 43.8265 46.8272C43.4291 46.1452 43.7837 45.7769 44.1248 45.4376C44.3292 45.2338 44.564 44.9478 44.7987 44.662C44.9157 44.5194 45.0328 44.3768 45.146 44.2445C45.4345 43.9075 45.56 43.6516 45.7302 43.3049C45.7607 43.2427 45.7926 43.1776 45.8272 43.1087C46.0545 42.654 45.9409 42.2565 45.7708 41.9155C45.6572 41.6877 45.0118 40.1167 44.4265 38.6923C44.1355 37.984 43.8594 37.3119 43.671 36.8592C43.1828 35.687 42.6883 35.69 42.2913 35.6924C42.2386 35.6928 42.1876 35.6931 42.1386 35.6906C41.7421 35.6706 41.2874 35.667 40.8336 35.667C40.3798 35.667 39.6423 35.837 39.0175 36.5191C38.9773 36.5631 38.9323 36.6111 38.8834 36.6633L38.8831 36.6637C38.1735 37.4213 36.634 39.0648 36.634 42.2002C36.634 45.544 39.062 48.7748 39.4124 49.2411L39.415 49.2444C39.4371 49.274 39.4767 49.3309 39.5333 49.4121C40.3462 50.5782 44.6615 56.7691 51.0481 59.5271C52.6732 60.2291 53.9409 60.6475 54.9303 60.9612C56.5618 61.4796 58.046 61.4068 59.22 61.2313C60.5286 61.0358 63.2487 59.5844 63.8161 57.9938C64.3836 56.4033 64.3836 55.0392 64.2136 54.7554C64.0764 54.5258 63.7545 54.3701 63.2776 54.1395L63.2775 54.1394C63.1632 54.0842 63.0401 54.0247 62.9086 53.9588Z"
                  fill="black"
                />
              </svg>
              {{ data.whatsapp }}
            </h4>
            <h4 class="skype">
              <svg
                width="100"
                height="100"
                viewBox="0 0 100 100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM73.3033 54.4387C73.3124 54.3917 73.3197 54.3441 73.327 54.2965C73.3333 54.2555 73.3397 54.2145 73.3471 54.1738C74.5051 56.2509 75.1208 58.6009 75.1208 60.9903C75.1208 64.7328 73.6639 68.2524 71.0168 70.8969C68.3706 73.5449 64.8536 75 61.112 75C58.6886 75 56.3153 74.37 54.2195 73.1842C54.2603 73.1768 54.301 73.1707 54.3416 73.1646C54.389 73.1575 54.4362 73.1504 54.4835 73.1413L54.4811 73.1409C54.4347 73.1499 54.3879 73.1569 54.3409 73.1639C54.3005 73.1699 54.26 73.176 54.2195 73.1833C54.1889 73.1665 54.1581 73.1501 54.1272 73.1336C54.0783 73.1075 54.029 73.0813 53.9801 73.0531L53.9778 73.0527C54.0217 73.0778 54.0653 73.101 54.1087 73.1241C54.1458 73.1439 54.1827 73.1636 54.2195 73.1842C52.8583 73.4259 51.465 73.5529 50.0743 73.5529C46.8795 73.5529 43.7795 72.9265 40.8621 71.6898C38.0423 70.5004 35.5124 68.7921 33.3378 66.6192C31.165 64.4455 29.4584 61.9156 28.2682 59.0967C27.0323 56.1784 26.4068 53.0794 26.4068 49.8837C26.4068 48.5154 26.5294 47.1453 26.763 45.8047C25.613 43.7348 25 41.3937 25 39.0115C25 35.269 26.4587 31.7502 29.104 29.104C31.7502 26.4569 35.269 25 39.0115 25C41.3033 25 43.5683 25.5718 45.5819 26.6421C45.5844 26.6415 45.587 26.6413 45.5895 26.6409C45.5905 26.6408 45.5916 26.6406 45.5926 26.6404C47.0602 26.3585 48.5682 26.2171 50.0743 26.2171C53.2691 26.2171 56.3681 26.8426 59.2855 28.0767C62.1027 29.2687 64.6352 30.9753 66.8072 33.1481C68.9827 35.3218 70.6884 37.8526 71.8804 40.6715C73.1162 43.5889 73.7418 46.6889 73.7418 49.8837C73.7418 51.3245 73.6057 52.7661 73.3471 54.1738C73.3396 54.2149 73.3332 54.2561 73.3268 54.2974C73.3196 54.3444 73.3123 54.3916 73.3033 54.4387ZM37.9994 57.1467C37.9994 60.2448 41.7606 64.3784 50.1691 64.3784C58.1687 64.3784 62.1331 60.5223 62.1331 55.3596C62.1331 52.0243 60.5956 48.4849 54.5327 47.1336L48.9968 45.9049C46.892 45.4253 44.4677 44.7908 44.4677 42.8059C44.4677 40.8165 46.168 39.4267 49.2375 39.4267C52.8662 39.4267 54.1715 40.8896 55.2507 42.099C56.0111 42.9512 56.6593 43.6775 57.9288 43.6775C59.5441 43.6775 60.959 42.7271 60.959 41.0939C60.959 37.2816 54.8575 34.4206 49.6814 34.4206C44.0623 34.4206 38.079 36.8064 38.079 43.1612C38.079 46.2217 39.1726 49.4774 45.1953 50.988L52.674 52.8547C54.9372 53.4132 55.5037 54.6866 55.5037 55.8348C55.5037 57.7445 53.6065 59.6104 50.1691 59.6104C46.2932 59.6104 44.9658 57.8884 43.8436 56.4327C43.0221 55.367 42.3106 54.4441 40.7897 54.4441C39.1726 54.4441 37.9994 55.5573 37.9994 57.1467Z"
                  fill="black"
                />
              </svg>
              {{ data.skype }}
            </h4>
          </div>
        </div>
      </div>

      <!-- section2 = account information -->
    
      <button @click="toggle=true" :class="{btn_about:true,passive:!toggle}">About User</button>
      <button @click="toggle=false" :class="{btn_frie:true,passive:toggle}">Friends</button>
      <div class="section2 account_info">

        <button class="user_details btn btn-request">
          Send friend request
        </button>
        <div class="about_user" v-if="toggle">
          <h2>Country: <span id="country"> {{ data.country }} </span></h2>
          <h2>Gender: <span id="gender">{{ data.gender }}</span></h2>
          <h2>father name: <span id="last_name">{{ data.father_name }}</span></h2>
          <h2>Education: <span id="education">{{ data.education }}</span></h2>
          <h2>Date of birth: <span id="birth">{{ data.birth }}</span></h2>
          <h2>
          
          </h2>
        </div>

        <div class="friends" v-if="!toggle">

          
          <ul>
          <li v-for="e in this.friends" :key="this.user_id">
            <span id="profile"
              ><img src="../assets/img/img1.jpg" alt="profile"
            /></span>
      
                
        <router-link  to="/Account"  @click="this.$store.state.anotheruserid=e.user_id" style="cursor: pointer; all: unset;"><span style="color: #333;" id="username">{{ e.user_name }}</span></router-link>
       
            
     
            <span id="state">online</span>
          </li>
        </ul>


        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {


    data() {
        return {
            toggle:true,
            data:[],
            friends_id:[],
            friends:[]


        }
    },

    mounted(){
      this.get_friends_id()
      this.get_data()
      this.get_friends()
    },
methods: {
  
  get_friends_id() {
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/friends.php", {})
        .then((Response) => {
          for (let i = 0; i < Response.data.length; i++) {
            if (Response.data[i].user_id == this.$store.state.anotheruserid) {
              this.friends_id.push(Response.data[i].friends_id);
            }
          }
        })
        .catch((err) => {
          console.log(err);
        });
      // console.log('friends id :',this.friends_id);
    },

    get_friends() {
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/index.php")
        .then((Response) => {
          let b = Object.entries(Response.data);
          for (let i = 0; i < this.friends_id.length; i++) {
            for (let x = 0; x < b.length; x++) {
              // debugger
              if (this.friends_id[i] == b[x][1].user_id) {

                this.friends.push(b[x][1]);
              }
            }
          }
          console.log("friends:",this.friends);
          // this.allUsers = Response.data;
          // console.log(this.allUsers);
          //  console.log(b[3][1].user_id);
          //  console.log(typeof(b));
        })
        .catch((err) => {
          console.log(err);
        });
    },

  get_data() {
  
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/index.php",{
        })
        .then((Response) => {
        for (let i = 0; i <Response.data.length; i++) {
        if(Response.data[i].user_id==this.$store.state.anotheruserid){
          this.data=Response.data[i];
        
        }
          
        }
           console.log(Response.data);
        })
        .catch((err) => {
          console.log(err);
        });
    },

},



};
</script>

<style scoped>

.friends{
    background: #e6e6e6;
    height: 30em;
    padding: 2em;
    left: 3px;
    position: relative;
    bottom: 42px;
    overflow-x: hidden;
    overflow-y: auto;
}


.a{
    margin: 1.5em 0;
}

span#profile img{
    width: 5em;
    border-radius: 100%;
    height: 5em;
    border: 1px solid #fff;
    position: relative;
    top: 0.5em;
    margin: 0 2em;
}


.friends  li{
    height: 7em;
    border-bottom: 1px solid #2196F3;
    margin: 1em 0;
    cursor: pointer;
    transition: all .3s ease;
    display: flex;
    align-items: center;
}
.friends li:hover{
    background: #03ad9c;
    color: #fff;
 
}
#username{
    font-size: 2em;
}

svg{
    width: 2em;
    height: 2em;
    margin-right: 1em;
   
}
svg path{
    fill: #2196f3;
}
.info {
  display: grid;
  justify-content: space-between;
  grid-template-columns: 20em 20em;
  text-align: justify;
  height: 15em;
}
.section1 h1 {
  position: relative;
  top: -10px;
  text-align: justify;
  color:#2196f3;
  text-transform: capitalize;
}
.section1 h1 span{
    color: #f7de00;
}
.section1 h1::after {
  content: "";
  display: block;
  width: 30%;
  height: 0.2em;
  background: #2196f3;
  border-radius: 1em;
  margin: 0.3em 0;
}
.user_personal_info{
    top: -2em;
    position: relative;
}
.user_personal_info > h4,
address {
  margin: 1.4em 0;
}
address {
  font-weight: 700;
  text-transform: capitalize;
}
.section2{
    font-size: 0.5em;
    padding: 2em 0;
    text-align: justify;
    height: 30em;
    box-shadow: -3px 3em 19px 0px #f4f0f0;
}
.about_user{
    background: #e6e6e6;
    position: relative;
    top: -5.4em;
    padding: 2em;
    height: 112%;
    left: 0.4em;
    width: 84em;
}
#favorites   li{
    margin:.5em 3em;
    list-style: auto;
}
.about_user h2{
margin: 1em  0;
}
.btn_about{
    position: relative;
    top: -2em;
    left: -17em;
    background: #e6e6e6;
    border: 1px solid #333;
    padding: 0.7em;
    border: none;
    width: 8em;
    cursor: pointer;
    
    border-radius: 1em 1em 0 0;
}
.btn_frie{
    position: relative;
    top: -2em;
    left: -17em;
    width: 8em;
    padding: 0.7em;
    background: #e6e6e6;
    color: #333;
    border-radius: 1em 1em 0 0;
    border: none;
    cursor: pointer;
    transition: all .3s ease;
}

.passive{
    position: relative;
    top: -2em;
    left: -17em;
    width: 8em;
    padding: 0.7em;
    background: #333;
    color: #fff;
    border-radius: 1em 1em 0 0;
    border: none;
    cursor: pointer;
    transition: all .3s ease;
}
.passive:hover{
    background: #2196f3;
}
.btn-request{
    position: absolute;
    top: 1em;
    right: 2em;
}
.social_media > h4 {
    margin: .8em 0;
    position: relative;
    bottom: 2em;
    display: flex;
    padding: 0 1em;
    align-items: center;
    text-transform: capitalize;
}
.btn-back {
  z-index: 22222222;
  width: 10em;
  position: absolute;
  background: #333;
  color: #fff;
  font-size: 2em;
  border: none;
  height: 2em;
  left: 4.2em;
  bottom: 2em;
  cursor: pointer;
  transition: all 0.2s ease;
}
.btn-back:hover {
  background: none;
  border: 1px solid #333;
  color: #333;
}
img {
  width: 70%;
  margin: 1em 0;
  padding: 0.2em;
  background: radial-gradient(#2196f3, #009688);
}

.details {
  width: 55%;
  background: #fff;
  height: 44.4vw;
  position: absolute;
  right: 10%;
  padding: 2em;
  top: 2em;
  box-shadow: 6px 9px 10px #dedede;
}
.user_details {
  margin: 1em 0;
}
.profile_img_and_details {
  width: 20em;
  overflow: hidden;
  display: flex;
  left: 10%;
  position: absolute;
  box-shadow: 6px 9px 10px #dedede;
  top: 2em;
  height: 30em;
  background: #fff;
  padding: 1em;
  align-items: stretch;
  align-content: center;
  flex-wrap: wrap;
  flex-direction: column;
}
.container {
  width: 100%;
  height: 48.6vw;
  background: #f0efef;
  position: absolute;
  top: 0;
}
.btn {
  border: none;
  background: #333;
  padding: 0.7em;
  color: #fff;

  transition: all 0.3s ease-out;
}
.btn:hover {
  background: #fff;
  color: #333;
  border: 1px solid #333;
}
</style>
