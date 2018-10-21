import { Component, ViewChild } from '@angular/core';
import { Nav, Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

import { HomePage } from '../pages/home/home';
import { ListPage } from '../pages/list/list';
import { AidePage } from '../pages/aide/aide';
import { AutomedPage } from '../pages/automed/automed';
import { BilanPage } from '../pages/bilan/bilan';
import { ConsultationPage } from '../pages/consultation/consultation';
import { DocumentPage } from '../pages/document/document';
import { EvaluationsantePage } from '../pages/evaluationsante/evaluationsante';
import { FormautomedPage } from '../pages/formautomed/formautomed';
import { FormconsultPage } from '../pages/formconsult/formconsult';
import { FormrbilanPage } from '../pages/formrbilan/formrbilan';
import { FormregimePage } from '../pages/formregime/formregime';
import { FormrhaspitalisationPage } from '../pages/formrhaspitalisation/formrhaspitalisation';
import { FormrrdvPage } from '../pages/formrrdv/formrrdv';
import { FormrvaccinationPage } from '../pages/formrvaccination/formrvaccination';
import { FormrvisitePage } from '../pages/formrvisite/formrvisite';
import { FormtraitementPage } from '../pages/formtraitement/formtraitement';
import { HaspitalisationPage } from '../pages/haspitalisation/haspitalisation';
import { LoadingPage } from '../pages/loading/loading';
import { Loginstep1Page } from '../pages/loginstep1/loginstep1';
import { Loginstep2Page } from '../pages/loginstep2/loginstep2';
import { NotificationPage } from '../pages/notification/notification';
import { ParamgeneralPage } from '../pages/paramgeneral/paramgeneral';
import { RdvPage } from '../pages/rdv/rdv';
import { RegimePage } from '../pages/regime/regime';
import { Signup1Page } from '../pages/signup1/signup1';
import { Signup2Page } from '../pages/signup2/signup2';
import { SplashscreenPage } from '../pages/splashscreen/splashscreen';
import { SuivimaternitePage } from '../pages/suivimaternite/suivimaternite';
import { TraitementPage } from '../pages/traitement/traitement';
import { VaccinationPage } from '../pages/vaccination/vaccination';
import { VisitePage } from '../pages/visite/visite';

@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  @ViewChild(Nav) nav: Nav;

  rootPage: any = Loginstep1Page;

  pages: Array<{title: string, component: any}>;

  constructor(public platform: Platform, public statusBar: StatusBar, public splashScreen: SplashScreen) {
    this.initializeApp();

    // used for an example of ngFor and navigation
    this.pages = [
      { title: 'Home', component: HomePage },
      { title: 'List', component: ListPage }
    ];

  }

  initializeApp() {
    this.platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      this.statusBar.styleDefault();
      this.splashScreen.show();
    this.splashScreen.hide();
    });
  }

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page.component);
  }
}
