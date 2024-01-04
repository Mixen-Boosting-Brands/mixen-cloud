import { gsap } from "gsap";
    
import { CustomEase } from "gsap/CustomEase";
import { RoughEase, ExpoScaleEase, SlowMo } from "gsap/EasePack";
    
import { Flip } from "gsap/Flip";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { EaselPlugin } from "gsap/EaselPlugin";
import { TextPlugin } from "gsap/TextPlugin";


gsap.registerPlugin(Flip,ScrollTrigger,ScrollToPlugin,EaselPlugin,TextPlugin,RoughEase,ExpoScaleEase,SlowMo,CustomEase);

gsap.to('#smart-is-the-new-sexy', {
    duration: 2,
    text: "Smart is the new sexy",
    ease: "none",
});