<template>
<div class="site-wrapper video-background">
    <div class="lds-hourglass" :hidden="hidden"></div>
    <div class="site-wrapper-inner" >
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">LIGHT MICROFINANCE INC</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li><a href="https://twitter.com/jenyelkind"><i class="fa fa-twitter fa-fw"></i></a></li>
                            <li><a href="https://www.facebook.com/jenyelkind"><i class="fa fa-facebook fa-fw"></i></a></li>
                            <li><a href="https://plus.google.com/+JenyElkind/"><i class="fa fa-google-plus fa-fw"></i></a></li>
                            <li><a href="mailto:elkind@elkind.net"><i class="fa fa-envelope fa-fw"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="cover-container" style="margin-top:250px    ">
            <div class="inner cover">
                <h1 class="cover-heading">Random Picker</h1>
                <p class="lead">Random picker for sir enmar</p>
                <p class="lead"><a @click="pick" class="btn btn-lg btn-default">Go</a></p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Copyright &copy; <a href="/">primoashbee</a></p>
                    
                </div>
            </div>

        </div>

    </div>
</div>
</template>

<style >
.lds-hourglass {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  ;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 8px;
  box-sizing: border-box;
  border: 32px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}
</style>
<script>
export default {
    mounted(){
        
    },
    data(){
        return {
            hidden: false,
            winner: null
        }
    },
    methods:{
        pick(){
            this.hidden =true
            axios.get('/pick')
            .then(res=>{
                this.winner = res.data.winner
                // setTimeout(()=>{
                this.hidden = false    
                    Swal.fire(
                        'We have a winner!',
                        this.winner.name + ' - ' + this.winner.phone,
                        'success'
                    )
                // },3000)

            })
        }
    }
}
</script>