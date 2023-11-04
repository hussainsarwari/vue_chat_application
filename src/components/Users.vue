<template>
    <div id="m">
        <form action="" method="get">
           <input type="search" name="search" id="search" placeholder="search">
           <button type="submit"><img class="search" src="../assets/img/icons8-search-100.png" alt="searcg"></button>
        </form>
        <div class="users">
            <h4>My Friends</h4>
            <div class="friends">
              {{ friends_id }}
              this :{{ data }}
                <ul >
                   
                    <li v-for="e in this.friends_id" :key="id">
                        {{ e }}
                        <!-- <span id="profile"><img src="../assets/img/img1.jpg" alt="profile"></span>
                        <span id="username">Mohammadi</span>
                        <span id="state">online</span> -->
                    </li>
                  
                 
                </ul>
            </div>
            <span @click="minimize()" id="minimize">Minimize</span>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        props:['user_data'],
        data() {
            return {
                flag:this.user_data,
                data:'',
                user_id:this.$store.state.user_id,
                friends_id:''

            }
        },
        mounted() {
            if (this.flag) {
                this.get_friends()
                this.get_data()
                
            }
        },
        methods: {
            get_friends() {
      axios
        .get("http://localhost:801/Vue_chat_appliction/src/php/friends.php",{
        })
        .then((Response) => {
            // console.log(Response.data[1].user_id);
        for (let i = 0; i < Response.data.length; i++) {
            for (let key=0;key<this.friends_id.length;key++) {
                if (Response.data[key].user_id==this.user_id) {
                    this.data=Response.data[i]
                    
                }
            }
            
        }
                console.log(this.data);
            // this.friends_id=Response.data
          
        
          //  console.log(Response.data[1].user_id);
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
            // console.log(Response.data)
        for (let i = 0; i < Response.data.length; i++) {

            for (let j = 0; j < this.friends_id.length; j++) {
                if(Response.data[i].user_id==this.friends_id[j]){
          this.data=Response.data[i];
        
        }
          
                
            }
       
        }
           console.log(this.data);
        })
        .catch((err) => {
          console.log(err);
        });
    },

            minimize(){
                this.$emit('animationEvent')
               document.querySelector('.box').style.width='100%'
            //    document.querySelector('.chat').style.width='100%'
                document.querySelector("div#m").classList.add('animation');
            }
        },
    }
</script>

<style scoped>
div.animation{
    animation: minimize .5s ease-out forwards;
}


#minimize{
    width: 100%;
    display: block;
    position: relative;
    top: 0.7em;
    left: 0em;
    cursor: pointer;
    background: #007da8;
    padding: 0.5em;
}
#minimize::after{
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
    transition: all .4s ease-in;
}
#minimize:hover::after{
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
.friends{
    overflow: auto;
    width: 100%;
    height: 29em;
    overflow-x: hidden;
}



::-webkit-scrollbar{
    background: #013e38;
    width: 0.4em;}
::-webkit-scrollbar-thumb{
    border-radius: 2em;
    background: #2196F3;
}


.friends li{
    background: #009688;
    height: 4em;
    border-bottom: 3px solid #2196F3;
    margin: 1em 0;
    cursor: pointer;
    transition: all .3s ease;
}
.friends li:hover{
    background: #03ad9c;
 
}

span#profile img{
    width: 3em;
    border-radius: 100%;
    height: 3em;
    border: 3px solid;
    position: relative;
    top: 0.5em;
    left: -6em;
}


#username{
    display: block;
    position: relative;
    bottom: 3em;
    left: 6.7em;
    font-size: 0.8em;
    text-align: start;
}
#state{
    position: relative;
    left: -1.4em;
    bottom: 38px;
    font-weight: 800;
}
.users{
    width: 100%;
    margin: 2em 0;
    color: #e8e8e8;
}
h4::after{
    content: "";
    display: block;
    height: .2em;
    border-radius:0 1em  1em 0;
    width: 70%;
    background:#2196F3 ;
    margin-top: .7em;
}
form{
    position: relative;
    top: 2em;
    width: 90%;
    margin: auto;
}
input[type='search']{
    height: 2.9em;
    background: #0a665d;
    border: none;
    border-bottom: 1px solid #2196F3;
    width: 97%;
    transition: all .2s ease;
    color: #fff;
    padding: 0 1em;
}
input[type='search']:focus-visible{
    border: none;
    outline-style: none;
    border-bottom: 3px solid #0082ec;
}
::placeholder{
    color: #fff;
    padding: 0 1em;
}
.search{
    width: 2em;
    position: relative;
    top: 3px;
    right: -1px;
    transform: rotate(263deg);
    
}
button{
    position: relative;
    top: -41px;
    background: none;
    border: none;
    cursor: pointer;
    width: 3em;
    height: 3em;
    transition: all .2s ease;
    background: #0082ec;
    right: -99px;
}
button:hover{
    background: #07c8d6;
    width: 3em;
    height: 3em;
}
#m{
    width: 20%;
    position:fixed;
    background: #00766b;
    height: 100vh;
}

@keyframes minimize {
    0%{
        left: 0;
    }
    100%{
left: -20em;
    }
}



</style>