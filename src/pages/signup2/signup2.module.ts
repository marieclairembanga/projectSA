import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { Signup2Page } from './signup2';
import { AuthServiceProvider } from '../../providers/auth-service/auth-service';

@NgModule({
  declarations: [
    Signup2Page,
  ],
  imports: [
    IonicPageModule.forChild(Signup2Page),
  ],
})
export class Signup2PageModule {}
