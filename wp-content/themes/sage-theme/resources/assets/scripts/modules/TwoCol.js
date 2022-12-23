
export default class TowCol {
    constructor () {
      this.$html = $('html')
    }
    test1(){
        $('h1,h3,p').click(function(){
            $('h1,h3,p').removeClass('bg-primary');
            $(this).addClass('bg-primary');        
        });
        // $("h1,h3,p").click(function(){
        //     $("h1,h3,p").hide();
        //   });     
       
    }
    
    init () {
        this.test1()
    }
  }
  
  new TowCol().init()
  