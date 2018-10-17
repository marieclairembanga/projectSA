import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { RegimePage } from './regime';

@NgModule({
  declarations: [
    RegimePage,
  ],
  imports: [
    IonicPageModule.forChild(RegimePage),
  ],
})
export class RegimePageModule {}
