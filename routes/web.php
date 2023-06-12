<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CaseStudyControler;
use App\Http\Controllers\HomeMenuController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\HomeControler;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\NewsAndEventController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\ProductsAndSolutionController;
use App\Http\Controllers\Admin\Careers\CareersController;
use App\Http\Controllers\Admin\HomeMenu\MenuHomeController;
use App\Http\Controllers\Admin\Services\ServicesController;
use App\Http\Controllers\Admin\CaseStudy\CaseStudyController;
use App\Http\Controllers\Admin\ContactUs\ContactsUsController;
use App\Http\Controllers\Admin\NewsAndEvent\NewsEventController;
use App\Http\Controllers\Admin\ProductAndSolution\ProductAndSolutionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    Artisan::call('optimize:clear');
    return 'clear done';
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'migrated successfully';
});

Route::get('/', [HomeController::class, 'home'])->name('home');

Auth::routes();


Route::post('saveMsg', [ContactusController::class, 'save'])->name('saveMsg');

// NavMenu Routes
// Services Routes
Route::get('/business-consulting', [ServiceController::class, 'businessConsulting'])->name('services.businessConsulting');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/digital-transformation-with-cloud', [ServiceController::class, 'digitalTransformationWithCloud'])->name('services.digitalTransformationWithCloud');
Route::get('/hana-conversion', [ServiceController::class, 'hanaConversion'])->name('services.hanaConversion');
Route::get('/IPO-compliance', [ServiceController::class, 'IPOCompliance'])->name('services.IPOCompliance');
Route::get('/PLCMES-weigh-bridge-integration', [ServiceController::class, 'PLCMESWeighBridgeIntegration'])->name('services.PLCMESWeighBridgeIntegration');
Route::get('/resource-argumentation', [ServiceController::class, 'resourceArgumentation'])->name('services.resourceArgumentation');
Route::get('/application-support', [ServiceController::class, 'applicationSupport'])->name('services.applicationSupport');
Route::get('/specific-consulting', [ServiceController::class, 'specificConsulting'])->name('services.specificConsulting');
// home menu routes
Route::get('/about-mesprosoft', [HomeMenuController::class, 'aboutUs'])->name('home.about');
Route::get('/management-team', [HomeMenuController::class, 'managementTeam'])->name('home.managementTeam');
Route::get('/core-values', [HomeMenuController::class, 'coreValues'])->name('home.coreValues');
Route::get('/why-mesprosoft', [HomeMenuController::class, 'whyMesprosoft'])->name('home.whyMesprosoft');
// product and solution routes
Route::get('/product-and-solution', [ProductsAndSolutionController::class, 'index'])->name('productsAndSolutions.index');
Route::get('/dispatch-automation', [ProductsAndSolutionController::class, 'dispatchAutomation'])->name('productAndSolution.dispatchAutomation');
Route::get('/dynamic-machine-scheduling', [ProductsAndSolutionController::class, 'dynamicMachineScheduling'])->name('productAndSolution.dynamicMachineScheduling');
Route::get('/electronic-batch-manufacturing', [ProductsAndSolutionController::class, 'electronicBatchManufacturing'])->name('productAndSolution.electronicBatchManufacturing');
Route::get('/handheld-mobile-bar-code', [ProductsAndSolutionController::class, 'handheldMobileBarCode'])->name('productAndSolution.handheldMobileBarCode');
Route::get('/loan-management-solution', [ProductsAndSolutionController::class, 'loanManagementSolution'])->name('productAndSolution.loanManagementSolution');
Route::get('/mespro-GPS-Preconfigured-analytics', [ProductsAndSolutionController::class, 'mesproGPSPreconfiguredAnalytics'])->name('productAndSolution.mesproGPSPreconfiguredAnalytics');
Route::get('/mespro-life-science-CFR-part11', [ProductsAndSolutionController::class, 'mesproLifeScienceCFRPart11'])->name('productAndSolution.mesproLifeScienceCFRPart11');
Route::get('/mespro-optimized-MRP', [ProductsAndSolutionController::class, 'mesproOptimizedMRP'])->name('productAndSolution.mesproOptimizedMRP');
Route::get('/mespro-paperess-manufacturing', [ProductsAndSolutionController::class, 'mesproPaperessManufacturing'])->name('productAndSolution.mesproPaperessManufacturing');
Route::get('/MesproX-Steps', [ProductsAndSolutionController::class, 'MesproX_Steps'])->name('productAndSolution.MesproX-Steps');
Route::get('/O2C-automation', [ProductsAndSolutionController::class, 'O2CAutomation'])->name('productAndSolution.O2CAutomation');
Route::get('/purchase-budget-check-and-approval', [ProductsAndSolutionController::class, 'purchaseBudgetCheckAndApproval'])->name('productAndSolution.purchaseBudgetCheckAndApproval');
Route::get('/smart-foundry', [ProductsAndSolutionController::class, 'smartFoundry'])->name('productAndSolution.smartFoundry');
Route::get('/TS16949-compliant-KAPA', [ProductsAndSolutionController::class, 'TS16949CompliantKAPA'])->name('productAndSolution.TS16949CompliantKAPA');

Route::get('/BTP', [ProductsAndSolutionController::class, 'BTP'])->name('productAndSolution.BTP');
Route::get('/IOT', [ProductsAndSolutionController::class, 'IOT'])->name('productAndSolution.IOT');
// case study routes
Route::get('/food-industry', [CaseStudyControler::class, 'foodIndustry'])->name('caseStudy.foodIndustry');
Route::get('/machine-tool-industry', [CaseStudyControler::class, 'machineToolIndustry'])->name('caseStudy.machineToolIndustry');
Route::get('/sap-Hospitals-capability', [CaseStudyControler::class, 'SAPHospitalsCapability'])->name('caseStudy.SAPHospitalsCapability');
Route::get('/SAP-NBFC', [CaseStudyControler::class, 'SAPNBFC'])->name('caseStudy.SAPNBFC');
Route::get('/food-processing-consumer-ware', [CaseStudyControler::class, 'foodProcessingConsumerWare'])->name('caseStudy.foodProcessingConsumerWare');
Route::get('/manufacturing', [CaseStudyControler::class, 'manufacturing'])->name('caseStudy.manufacturing');
Route::get('/pharmaceuticals', [CaseStudyControler::class, 'pharmaceuticals'])->name('caseStudy.pharmaceuticals');
Route::get('/automotive-components', [CaseStudyControler::class, 'automotiveComponents'])->name('caseStudy.automotiveComponents');
Route::get('/foam-packaging-products', [CaseStudyControler::class, 'foamPackagingProducts'])->name('caseStudy.foamPackagingProducts');
Route::get('/rubber-and-polymers', [CaseStudyControler::class, 'rubberandPolymers'])->name('caseStudy.rubberandPolymers');
Route::get('/AIRCRAFT-industries', [CaseStudyControler::class, 'AIRCRAFTIndustries'])->name('caseStudy.AIRCRAFTIndustries');
Route::get('/real-estate-industries', [CaseStudyControler::class, 'realEstateIndustries'])->name('caseStudy.realEstateIndustries');
Route::get('/UTILITIES-industries', [CaseStudyControler::class, 'UTILITIESIndustries'])->name('caseStudy.UTILITIESIndustries');
// event and news route
Route::get('/news', [NewsAndEventController::class, 'index'])->name('eventAndNews.index');
Route::get('/events', [NewsAndEventController::class, 'event'])->name('eventAndNews.event');
Route::get('/event-detail', [NewsAndEventController::class, 'eventDetail'])->name('eventAndNews.eventDetail');
// Route::get('/news', [NewsAndEventController::class, 'news'])->name('eventAndNews.news');
// careers route
Route::get('/career', [CareerController::class, 'index'])->name('careers.index');
// contact us route
Route::get('/contact-us', [ContactusController::class, 'index'])->name('contactUs');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('auth.login');
    })->name('admin');

    Route::prefix('home')->group(function () {
        Route::get('/', [HomeControler::class, 'homeSetting'])->name('home.setting');

        Route::post('/storeNewSlide', [HomeControler::class, 'storeNewSlide'])->name('home.storeNewSlide');
        Route::post('/editSlide', [HomeControler::class, 'editSlide'])->name('home.editSlide');
        Route::post('/updateSlide', [HomeControler::class, 'updateSlide'])->name('home.updateSlide');
        Route::delete('/deleteSlide/{id}', [HomeControler::class, 'deleteSlide'])->name('home.deleteSlide');

        Route::post('/storeSatisfiedCustomer', [HomeControler::class, 'storeSatisfiedCustomer'])->name('home.storeSatisfiedCustomer');
        Route::post('/updateSatisfiedCustomer', [HomeControler::class, 'updateSatisfiedCustomer'])->name('home.updateSatisfiedCustomer');
        Route::delete('/deleteSatisfiedCustomerImage/{id}', [HomeControler::class, 'deleteSatisfiedCustomerImage'])->name('home.deleteSatisfiedCustomerImage');

        Route::post('/storebuildingEfficiency', [HomeControler::class, 'storebuildingEfficiency'])->name('home.storebuildingEfficiency');
        Route::post('/updatebuildingEfficiency', [HomeControler::class, 'updatebuildingEfficiency'])->name('home.updatebuildingEfficiency');

        Route::post('/storeOurServices', [HomeControler::class, 'storeOurServices'])->name('home.storeOurServices');
        Route::post('/updateOurServices', [HomeControler::class, 'updateOurServices'])->name('home.updateOurServices');

        Route::post('/storeOurProductAndSolution', [HomeControler::class, 'storeOurProductAndSolution'])->name('home.storeOurProductAndSolution');
        Route::post('/updateOurProductAndSolution', [HomeControler::class, 'updateOurProductAndSolution'])->name('home.updateOurProductAndSolution');

        Route::post('/storeSlider2NewSlide', [HomeControler::class, 'storeSlider2NewSlide'])->name('home.storeSlider2NewSlide');
        Route::post('/editSlider2Slide', [HomeControler::class, 'editSlider2Slide'])->name('home.editSlider2Slide');
        Route::post('/updateSlider2Slide', [HomeControler::class, 'updateSlider2Slide'])->name('home.updateSlider2Slide');
        Route::delete('/deleteSlider2Slide/{id}', [HomeControler::class, 'deleteSlider2Slide'])->name('home.deleteSlider2Slide');

        Route::post('/storePercentageSection', [HomeControler::class, 'storePercentageSection'])->name('home.storePercentageSection');
        Route::post('/updatePercentageSection', [HomeControler::class, 'updatePercentageSection'])->name('home.updatePercentageSection');
    });

    Route::prefix('menu')->group(function () {


        Route::prefix('contactUs')->group(function () {

            Route::get('/{id}', [ContactsUsController::class, 'index'])->name('contactUs.index');

            Route::post('/createToSection', [ContactsUsController::class, 'createToSection'])->name('contactUs.createToSection');
            Route::post('/storeToSection', [ContactsUsController::class, 'storeToSection'])->name('contactUs.storeToSection');
            Route::get('/editToSection/{id}', [ContactsUsController::class, 'editToSection'])->name('contactUs.editToSection');
            Route::put('/updateToSection/{id}', [ContactsUsController::class, 'updateToSection'])->name('contactUs.updateToSection');

            Route::post('/storeCard', [ContactsUsController::class, 'storeCard'])->name('contactUs.storeCard');
            Route::post('/updateCard', [ContactsUsController::class, 'updateCard'])->name('contactUs.updateCard');
            Route::delete('/deleteCard/{id}', [ContactsUsController::class, 'deleteCard'])->name('contactUs.deleteCard');
            Route::post('/editCard', [ContactsUsController::class, 'editCard'])->name('contactUs.editCard');
        });

        Route::prefix('career')->group(function () {

            Route::get('/{id}', [CareersController::class, 'index'])->name('career.index');

            Route::post('/createToSection', [CareersController::class, 'createToSection'])->name('career.createToSection');
            Route::post('/storeToSection', [CareersController::class, 'storeToSection'])->name('career.storeToSection');
            Route::get('/editToSection/{id}', [CareersController::class, 'editToSection'])->name('career.editToSection');
            Route::put('/updateToSection/{id}', [CareersController::class, 'updateToSection'])->name('career.updateToSection');

            Route::post('/storeNewJob', [CareersController::class, 'storeNewJob'])->name('career.storeNewJob');
            Route::post('/updateJob', [CareersController::class, 'updateJob'])->name('career.updateJob');
            Route::delete('/deleteJob/{id}', [CareersController::class, 'deleteJob'])->name('career.deleteJob');
            Route::post('/editJob', [CareersController::class, 'editJob'])->name('career.editJob');

            Route::post('/editCurrentOpeningSection', [CareersController::class, 'editCurrentOpeningSection'])->name('career.editCurrentOpeningSection');
            Route::post('/updateCurrentOpeningSection', [CareersController::class, 'updateCurrentOpeningSection'])->name('career.updateCurrentOpeningSection');
            Route::post('/storeCurrentOpeningSection', [CareersController::class, 'storeCurrentOpeningSection'])->name('career.storeCurrentOpeningSection');
        });

        Route::prefix('newsEvent')->group(function () {

            Route::get('/{id}', [NewsEventController::class, 'index'])->name('newsEvent.index');

            Route::post('/createToSection', [NewsEventController::class, 'createToSection'])->name('newsEvent.createToSection');
            Route::post('/storeToSection', [NewsEventController::class, 'storeToSection'])->name('newsEvent.storeToSection');
            Route::get('/editToSection/{id}', [NewsEventController::class, 'editToSection'])->name('newsEvent.editToSection');
            Route::put('/updateToSection/{id}', [NewsEventController::class, 'updateToSection'])->name('newsEvent.updateToSection');

            Route::post('/storeCard', [NewsEventController::class, 'storeCard'])->name('newsEvent.storeCard');
            Route::post('/updateCard', [NewsEventController::class, 'updateCard'])->name('newsEvent.updateCard');
            Route::delete('/deleteCard/{id}', [NewsEventController::class, 'deleteCard'])->name('newsEvent.deleteCard');
            Route::post('/editCard', [NewsEventController::class, 'editCard'])->name('newsEvent.editCard');
        });

        Route::prefix('home/corporateOverview')->group(function () {

            Route::get('/{id}', [MenuHomeController::class, 'index'])->name('home/corporateOverview.index');
            Route::post('/', [MenuHomeController::class, 'getServicePage'])->name('home/corporateOverview.getServicePage');

            Route::post('/createToSection', [MenuHomeController::class, 'createToSection'])->name('home/corporateOverview.createToSection');
            Route::post('/storeToSection', [MenuHomeController::class, 'storeToSection'])->name('home/corporateOverview.storeToSection');
            Route::get('/editToSection/{id}', [MenuHomeController::class, 'editToSection'])->name('home/corporateOverview.editToSection');
            Route::put('/updateToSection/{id}', [MenuHomeController::class, 'updateToSection'])->name('home/corporateOverview.updateToSection');

            Route::get('/createExplanationSection/{id?}', [MenuHomeController::class, 'createExplanationSection'])->name('home/corporateOverview.createExplanationSection');
            Route::post('/storeExplanationSection', [MenuHomeController::class, 'storeExplanationSection'])->name('home/corporateOverview.storeExplanationSection');
            Route::get('/editExplanationSection/{id}', [MenuHomeController::class, 'editExplanationSection'])->name('home/corporateOverview.editExplanationSection');
            Route::put('/updateExplanationSection/{id}', [MenuHomeController::class, 'updateExplanationSection'])->name('home/corporateOverview.updateExplanationSection');
            Route::delete('/deleteExplanationImage/{id}', [MenuHomeController::class, 'deleteExplanationImage'])->name('home/corporateOverview.deleteExplanationImage');

            Route::post('/storeCard', [MenuHomeController::class, 'storeCard'])->name('home/corporateOverview.storeCard');
            Route::post('/updateCard', [MenuHomeController::class, 'updateCard'])->name('home/corporateOverview.updateCard');
            Route::delete('/deleteCard/{id}', [MenuHomeController::class, 'deleteCard'])->name('home/corporateOverview.deleteCard');
            Route::post('/editCard', [MenuHomeController::class, 'editCard'])->name('home/corporateOverview.editCard');
        });

        Route::prefix('caseStudy')->group(function () {

            Route::get('/{id}', [CaseStudyController::class, 'index'])->name('caseStudy.index');
            Route::post('/', [CaseStudyController::class, 'getServicePage'])->name('caseStudy.getServicePage');

            Route::post('/createToSection', [CaseStudyController::class, 'createToSection'])->name('caseStudy.createToSection');
            Route::post('/storeToSection', [CaseStudyController::class, 'storeToSection'])->name('caseStudy.storeToSection');
            Route::get('/editToSection/{id}', [CaseStudyController::class, 'editToSection'])->name('caseStudy.editToSection');
            Route::put('/updateToSection/{id}', [CaseStudyController::class, 'updateToSection'])->name('caseStudy.updateToSection');

            Route::get('/createExplanationSection/{id?}', [CaseStudyController::class, 'createExplanationSection'])->name('caseStudy.createExplanationSection');
            Route::post('/storeExplanationSection', [CaseStudyController::class, 'storeExplanationSection'])->name('caseStudy.storeExplanationSection');
            Route::get('/editExplanationSection/{id}', [CaseStudyController::class, 'editExplanationSection'])->name('caseStudy.editExplanationSection');
            Route::put('/updateExplanationSection/{id}', [CaseStudyController::class, 'updateExplanationSection'])->name('caseStudy.updateExplanationSection');
            Route::delete('/deleteExplanationImage/{id}', [CaseStudyController::class, 'deleteExplanationImage'])->name('caseStudy.deleteExplanationImage');

            Route::post('/storeCard', [CaseStudyController::class, 'storeCard'])->name('caseStudy.storeCard');
            Route::post('/updateCard', [CaseStudyController::class, 'updateCard'])->name('caseStudy.updateCard');
            Route::delete('/deleteCard/{id}', [CaseStudyController::class, 'deleteCard'])->name('caseStudy.deleteCard');
            Route::post('/editCard', [CaseStudyController::class, 'editCard'])->name('caseStudy.editCard');
        });

        Route::prefix('productAndSolution')->group(function () {

            Route::get('/{id}', [ProductAndSolutionController::class, 'index'])->name('productAndSolution.index');
            Route::post('/', [ProductAndSolutionController::class, 'getServicePage'])->name('productAndSolution.getServicePage');

            Route::post('/createToSection', [ProductAndSolutionController::class, 'createToSection'])->name('productAndSolution.createToSection');
            Route::post('/storeToSection', [ProductAndSolutionController::class, 'storeToSection'])->name('productAndSolution.storeToSection');
            Route::get('/editToSection/{id}', [ProductAndSolutionController::class, 'editToSection'])->name('productAndSolution.editToSection');
            Route::put('/updateToSection/{id}', [ProductAndSolutionController::class, 'updateToSection'])->name('productAndSolution.updateToSection');

            Route::get('/createExplanationSection/{id?}', [ProductAndSolutionController::class, 'createExplanationSection'])->name('productAndSolution.createExplanationSection');
            Route::post('/storeExplanationSection', [ProductAndSolutionController::class, 'storeExplanationSection'])->name('productAndSolution.storeExplanationSection');
            Route::get('/editExplanationSection/{id}', [ProductAndSolutionController::class, 'editExplanationSection'])->name('productAndSolution.editExplanationSection');
            Route::put('/updateExplanationSection/{id}', [ProductAndSolutionController::class, 'updateExplanationSection'])->name('productAndSolution.updateExplanationSection');
            Route::delete('/deleteExplanationImage/{id}', [ProductAndSolutionController::class, 'deleteExplanationImage'])->name('productAndSolution.deleteExplanationImage');

            Route::post('/storeCard', [ProductAndSolutionController::class, 'storeCard'])->name('productAndSolution.storeCard');
            Route::post('/updateCard', [ProductAndSolutionController::class, 'updateCard'])->name('productAndSolution.updateCard');
            Route::delete('/deleteCard/{id}', [ProductAndSolutionController::class, 'deleteCard'])->name('productAndSolution.deleteCard');
            Route::post('/editCard', [ProductAndSolutionController::class, 'editCard'])->name('productAndSolution.editCard');
        });

        Route::prefix('service')->group(function () {

            Route::get('/{id}', [ServicesController::class, 'index'])->name('service.index');
            Route::post('/', [ServicesController::class, 'getServicePage'])->name('service.getServicePage');

            Route::post('/createToSection', [ServicesController::class, 'createToSection'])->name('service.createToSection');
            Route::post('/storeToSection', [ServicesController::class, 'storeToSection'])->name('service.storeToSection');
            Route::get('/editToSection/{id}', [ServicesController::class, 'editToSection'])->name('service.editToSection');
            Route::put('/updateToSection/{id}', [ServicesController::class, 'updateToSection'])->name('service.updateToSection');

            Route::get('/createExplanationSection/{id?}', [ServicesController::class, 'createExplanationSection'])->name('service.createExplanationSection');
            Route::get('/editExplanationSection/{id}', [ServicesController::class, 'editExplanationSection'])->name('service.editExplanationSection');
            Route::post('/storeExplanationSection', [ServicesController::class, 'storeExplanationSection'])->name('service.storeExplanationSection');
            Route::put('/updateExplanationSection/{id}', [ServicesController::class, 'updateExplanationSection'])->name('service.updateExplanationSection');
            Route::delete('/deleteExplanationImage/{id}', [ServicesController::class, 'deleteExplanationImage'])->name('service.deleteExplanationImage');

            Route::post('/editCard', [ServicesController::class, 'editCard'])->name('service.editCard');
            Route::post('/storeCard', [ServicesController::class, 'storeCard'])->name('service.storeCard');
            Route::delete('/deleteCard/{id}', [ServicesController::class, 'deleteCard'])->name('service.deleteCard');
            Route::post('/updateCard', [ServicesController::class, 'updateCard'])->name('service.updateCard');
        });
    });

    Route::prefix('faq')->group(function () {
        Route::get('/', [FAQController::class, 'index'])->name('faq.index');
        Route::get('create', [FAQController::class, 'create'])->name('faq.create');
        Route::get('edit/{id}', [FAQController::class, 'edit'])->name('faq.edit');
        Route::post('/storeFaq', [FAQController::class, 'storeFaq'])->name('faq.storeFaq');
        Route::put('/updateFaq/{id}', [FAQController::class, 'update'])->name('faq.update');
        Route::delete('/deleteFaqQues/{id}', [FAQController::class, 'deleteFaqQues'])->name('faq.deleteFaqQues');
    });




    Route::get('/dashboard', [HomeControler::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/updateprofile', [ProfileController::class, 'updateprofile'])->name('updateprofile');
    Route::get('deleteProfilePhoto', [ProfileController::class, 'deleteProfilePhoto'])->name('delete.profilePhoto');
    Route::post('passwordReset', [ProfileController::class, 'passwordReset'])->name('reset.password');
});


// Notification Routes
Route::get('/allNotifiMarkAsRead', [NotificationController::class, 'allNotifiMarkAsRead'])->name('allNotifiMarkAsRead');
Route::post('/notifiMarkAsRead', [NotificationController::class, 'notifiMarkAsRead'])->name('notifiMarkAsRead');
Route::post('/deleteNotification', [NotificationController::class, 'deleteNotification'])->name('deleteNotification');
Route::get('/deleteAllNotification', [NotificationController::class, 'deleteAllNotification'])->name('deleteAllNotification');
Route::get('/notificationDetail/{id}', [NotificationController::class, 'notificationDetail'])->name('notificationDetail');
