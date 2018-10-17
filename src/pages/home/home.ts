import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { AutomedPage } from '../automed/automed';
import { RegimePage } from '../regime/regime';
import { BilanPage } from '../bilan/bilan';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  tab1Root = AutomedPage;
  tab2Root = RegimePage;
  tab3Root = BilanPage;

  constructor(public navCtrl: NavController) {

  }
/*@Component({
 templateUrl: 'tabs.html'
 })
 export class TabsPage {

 tab1Root = HomePage;
 tab2Root = AboutPage;
 tab3Root = ContactPage;

 constructor() {

 }
 }*/
}
