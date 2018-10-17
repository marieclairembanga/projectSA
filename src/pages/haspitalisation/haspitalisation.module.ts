import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { HaspitalisationPage } from './haspitalisation';

@NgModule({
  declarations: [
    HaspitalisationPage,
  ],
  imports: [
    IonicPageModule.forChild(HaspitalisationPage),
  ],
})
export class HaspitalisationPageModule {}
