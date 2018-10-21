import { BrowserModule } from '@angular/platform-browser';
import { HttpModule } from '@angular/http';
import { SplashScreen } from '@ionic-native/splash-screen';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { ListPage } from '../pages/list/list';

import { StatusBar } from '@ionic-native/status-bar';
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
import { AuthServiceProvider } from '../providers/auth-service/auth-service';

@NgModule({
  declarations: [
    MyApp,
    HomePage,
    ListPage,
    AutomedPage,
    AidePage,
    BilanPage,
    ConsultationPage,
    DocumentPage,
    EvaluationsantePage,
    FormautomedPage,
    FormconsultPage,
    FormrbilanPage,
    FormregimePage,
    FormrhaspitalisationPage,
    FormrrdvPage,
    FormrvaccinationPage,
    FormrvisitePage,
    FormtraitementPage,
    HaspitalisationPage,
    LoadingPage,
    Loginstep1Page,
    Loginstep2Page,
    NotificationPage,
    ParamgeneralPage,
    RdvPage,
    RegimePage,
    Signup1Page,
    Signup2Page,
    SplashscreenPage,
    SuivimaternitePage,
    TraitementPage,
    VaccinationPage,
    VisitePage
  ],
  imports: [
    BrowserModule, HttpModule,
    IonicModule.forRoot(MyApp),
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    ListPage,
    AutomedPage,
    AidePage,
    BilanPage,
    ConsultationPage,
    DocumentPage,
    EvaluationsantePage,
    FormautomedPage,
    FormconsultPage,
    FormrbilanPage,
    FormregimePage,
    FormrhaspitalisationPage,
    FormrrdvPage,
    FormrvaccinationPage,
    FormrvisitePage,
    FormtraitementPage,
    HaspitalisationPage,
    LoadingPage,
    Loginstep1Page,
    Loginstep2Page,
    NotificationPage,
    ParamgeneralPage,
    RdvPage,
    RegimePage,
    Signup1Page,
    Signup2Page,
    SplashscreenPage,
    SuivimaternitePage,
    TraitementPage,
    VaccinationPage,
    VisitePage

  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    AuthServiceProvider,
    AuthServiceProvider
  ]
})
export class AppModule {}
