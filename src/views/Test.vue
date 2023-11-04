<template>
  <div id="app">
    <form method="post" @submit.prevent="send_data(message)">
      <input
        type="text"
        v-model="message"
        name="message"
        id="message"
        placeholder="Enter a message"
      />
      <button type="submit">Send Message</button>
    
    </form>
    <button  @click="show">Message</button>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      customConfig : {
    headers: {
    'Content-Type': 'application/json'
    }
},
      message:{
    "name":"hussain"
}
,test:'ksadf'


    };
  },
  methods: {
    show(){
      let t=JSON.stringify( this.message);
      console.log(t);
    },
    // send data function
   
   send_data(data) {
    let json=JSON.stringify(data);
   
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


// get dadta function

get_data() {
      axios
        .get(
          "http://localhost:801/Vue_chat_appliction/src/php/index.php",
         
        )
        .then((Response) => {
          console.log(Response);
        })
        .catch((err) => {
          console.log(err);
        });
    },

  },
};
</script>

<!-- <template>
    <div>
fetch data from server
<h2>{{ this.mydata.name }}</h2>
<h2>{{ this.mydata }}</h2>


<form  action="" method="get">

<input type="text" id="userId" v-model="formData.userid" placeholder="enter your  id">
<input type="text" id="title" v-model="formData.title" placeholder="enter your  title">
<input type="text" id="body" v-model="formData.body" placeholder="enter your post body ">

<button @click.prevent="post">create post</button><br>
<button @click.prevent="get"> get data</button>

</form>


<h1>{{    this.response  }}</h1>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                mydata:'',
                formData:{
                    userid:'',
                    title:'',
                    body:''
                },
                response:'123'
            }
        },

methods: {

    post(){
        axios.post('http://localhost:8080/test/f.json',this.formData)
        .then(r=> this.response=r)
        .catch(err=>console.log(err))
        
},


get(){
    fetch('http://localhost:8080/test/database.json')

.then(res => res.json())
.then(data => this.mydata=data,console.log(this.mydata))
.catch(err=> console.log(err.message))

},

    
   

        


    }


  
}

 
</script>

<style scoped>

</style> -->
