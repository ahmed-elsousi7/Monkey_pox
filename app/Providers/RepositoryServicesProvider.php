<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminAuthInterface',
            'App\Http\Repositories\Admin\AdminAuthRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminUserInterface',
            'App\Http\Repositories\Admin\AdminUserRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminAuthInterface',
            'App\Http\Repositories\Admin\AdminAuthRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminSymptomInterface',
            'App\Http\Repositories\Admin\AdminSymptomRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminContactInterface',
            'App\Http\Repositories\Admin\AdminContactRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminSettingInterface',
            'App\Http\Repositories\Admin\AdminSettingRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminFaqInterface',
            'App\Http\Repositories\Admin\AdminFaqRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\Excel\AdminFaqExcelInterface',
            'App\Http\Repositories\Admin\Excel\AdminFaqExcelRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminComplicationInterface',
            'App\Http\Repositories\Admin\AdminComplicationRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminHistoryInterface',
            'App\Http\Repositories\Admin\AdminHistoryRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminDiagnosisInterface',
            'App\Http\Repositories\Admin\AdminDiagnosisRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminSliderInterface',
            'App\Http\Repositories\Admin\AdminSliderRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminCountryInterface',
            'App\Http\Repositories\Admin\AdminCountryRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\Excel\AdminCountryExcelInterface',
            'App\Http\Repositories\Admin\Excel\AdminCountryExcelRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminCityInterface',
            'App\Http\Repositories\Admin\AdminCityRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\Excel\AdminCityExcelInterface',
            'App\Http\Repositories\Admin\Excel\AdminCityExcelRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminTownInterface',
            'App\Http\Repositories\Admin\AdminTownRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\Excel\AdminTownExcelInterface',
            'App\Http\Repositories\Admin\Excel\AdminTownExcelRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminClinicInterface',
            'App\Http\Repositories\Admin\AdminClinicRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminClinicDetailInterface',
            'App\Http\Repositories\Admin\AdminClinicDetailRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminClinicPhoneInterface',
            'App\Http\Repositories\Admin\AdminClinicPhoneRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminPreventionInterface',
            'App\Http\Repositories\Admin\AdminPreventionRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminPreventionDescriptionInterface',
            'App\Http\Repositories\Admin\AdminPreventionDescriptionRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminSpreadInterface',
            'App\Http\Repositories\Admin\AdminSpreadRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminSpreadDescriptionInterface',
            'App\Http\Repositories\Admin\AdminSpreadDescriptionRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminSpreadItemInterface',
            'App\Http\Repositories\Admin\AdminSpreadItemRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminNewsInterface',
            'App\Http\Repositories\Admin\AdminNewsRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminNewsDescriptionInterface',
            'App\Http\Repositories\Admin\AdminNewsDescriptionRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminVaccineInterface',
            'App\Http\Repositories\Admin\AdminVaccineRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminVaccineInformationInterface',
            'App\Http\Repositories\Admin\AdminVaccineInformationRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminDoctorInterface',
            'App\Http\Repositories\Admin\AdminDoctorRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminAwardInterface',
            'App\Http\Repositories\Admin\AdminAwardRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminCertificationInterface',
            'App\Http\Repositories\Admin\AdminCertificationRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminPatientInterface',
            'App\Http\Repositories\Admin\AdminPatientRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminMedicalDiagnosisInterface',
            'App\Http\Repositories\Admin\AdminMedicalDiagnosisRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\HomeInterface',
            'App\Http\Repositories\EndUser\HomeRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\AboutInterface',
            'App\Http\Repositories\EndUser\AboutRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\ContactInterface',
            'App\Http\Repositories\EndUser\ContactRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\SettingInterface',
            'App\Http\Repositories\EndUser\SettingRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\FaqInterface',
            'App\Http\Repositories\EndUser\FaqRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\DiagnosisInterface',
            'App\Http\Repositories\EndUser\DiagnosisRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\HistoryInterface',
            'App\Http\Repositories\EndUser\HistoryRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\NewsInterface',
            'App\Http\Repositories\EndUser\NewsRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\NewsDescriptionInterface',
            'App\Http\Repositories\EndUser\NewsDescriptionRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\PreventionInterface',
            'App\Http\Repositories\EndUser\PreventionRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\DoctorInterface',
            'App\Http\Repositories\EndUser\DoctorRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\PatientInterface',
            'App\Http\Repositories\EndUser\PatientRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
