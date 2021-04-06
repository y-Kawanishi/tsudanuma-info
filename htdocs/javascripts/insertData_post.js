document.addEventListener("DOMContentLoaded", function(event) {
    new Vue({
        el:'#app',
        data: {
            class1: "on",
            class2: "off"
        },
        methods: {
            nameSwitch: function(value){
                console.log(value);
                if(value == "name"){
                    console.log("hello");
                    this.class1 = "on";
                    this.class2 = "off";
                    this.checked = false;
                }else if(value == "brand"){
                    console.log("hello");
                    this.class1 = "off";
                    this.class2 = "on";
                    this.checked = true;
                }
            }
        }
    })
});