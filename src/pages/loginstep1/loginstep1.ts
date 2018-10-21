import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Signup2Page } from '../signup2/signup2';
import { HomePage } from '../home/home';
/**
 * Generated class for the Loginstep1Page page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-loginstep1',
  templateUrl: 'loginstep1.html',
})
export class Loginstep1Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Loginstep1Page');
  }
  facebookRegister(){
   this.navCtrl.push(HomePage);
  }
  googleRegister(){
    this.navCtrl.push(HomePage);
  }
  phoneAccount(){
    this.navCtrl.push(Signup2Page);
  }

}
