import menu from "./menu";
import backToTheTop from "./backToTop";
const app = {
    init(){
        document.documentElement.classList.add("js-enabled");
        menu.init()
        backToTheTop.init()
    }
}
app.init()
