import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { AuthServiceProvider } from '../../providers/auth-service/auth-service';
import { HomePage } from '../home/home';

/**
 * Generated class for the Signup2Page page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-signup2',
  templateUrl: 'signup2.html',
})
export class Signup2Page {
  responseData : any;
  userData = {"nom": "", "prenom" : "", "mot_de_passe": "", "telephone": ""};

  constructor(public navCtrl: NavController, public navParams: NavParams, public authService :AuthServiceProvider ) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Signup2Page');
  }

  signup(){
  console.log("bonjour");
    this.authService.signIn(this.userData,'patients-insert.php').then((result) => {
      this.responseData = result;
      console.log(result);
      if(this.responseData.userData){
        console.log(this.responseData);
        //localStorage.setItem('userData', JSON.stringify(this.responseData));
        this.navCtrl.push(HomePage);
      }
      else{ console.log("User already exists"); }
    }, (err) => {
      // Error log
    });

  }

  login(){
    //Login page link
    this.navCtrl.push(HomePage);
  }

}
