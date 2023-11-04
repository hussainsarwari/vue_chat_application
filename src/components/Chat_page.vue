<template>
    <div class="container">
    <div class="box">
 <img class="bg" src="../assets/img/img.jpg" alt="" srcset="">
 <div class="chat">
    <div class="user_msg">hi</div>
    <div class="friend_msg">how are you</div>
    <div class="send_msg">
        <form action="" method="get">
            <input type="text" placeholder="message" required class="message">
            <button type="submit" class="btn-send">
                <span>send</span>
            </button>
        </form>
        </div>
 </div>
    </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>
.btn-send{
    border: none;
    width: 9%;
    height: 4em;
    cursor: pointer;
    position: absolute;
    right: 0;
    transition: all .1s ease-in;
}
.btn-send:hover{
 background: #333;
 color: #fff;
}
.message{
    width: 90%;
    height: 4em;
    border: none;
}
.message:focus-visible{
    outline: none;
}

.send_msg{
    background: #fff;
    width: 100%;
    padding: 0 1.4em;
    text-align: left;
    position: absolute;
    bottom: 0.3em;
}
.user_msg{
    background: #ffffffab;
    width: fit-content;
    padding: 1em 2em 1em 2em;
    border-radius: 30px 0px 0px 30px;
    position: absolute;
    right: 0em;
    margin: 2em 0;
}
.friend_msg{
    margin: 5em 0;
    background: #ffffffab;
    width: fit-content;
    padding: 1em;
    border-radius: 0 30px 30px 0;
    position: relative;
    left: 0;
}
.chat{
    position: absolute;
    width: 100%;
    top: 0;
    height: 45vw;
    z-index: 1111111111;
    right: 0;
}
 .container{
   
    
}
.box{
    position: absolute;
    top: 4em;
    right: 0;
    width: 80%;
    overflow-y: hidden;
    background: none;
    height: 44.2vw;
    

}
img{
    width: 100%;
    height: 44.5vw;
}


</style>