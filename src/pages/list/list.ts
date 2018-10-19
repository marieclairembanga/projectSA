import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { TraitementPage } from '../traitement/traitement';
import { RdvPage } from '../rdv/rdv';
import { ConsultationPage } from '../consultation/consultation';

@Component({
  selector: 'page-list',
  templateUrl: 'list.html'
})
export class ListPage {
  tab1Root = ConsultationPage;
  tab2Root = TraitementPage;
  tab3Root = RdvPage;
  constructor(public navCtrl:NavController) {

  }
}
