<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormFacade As Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the form components
        Form::component('mdText', 'components.form.text', ['name', 'value', 'attributes', 'label'=>null]);
        Form::component('mdTextArea', 'components.form.textarea', ['name', 'value', 'attributes', 'label'=>null]);
        Form::component('mdSelect2', 'components.form.select2', ['name', 'value', 'attributes', 'label'=>null,'default'=>null]);
        Form::component('mdSlide', 'components.form.slide', ['name', 'value', 'attributes', 'label'=>null]);
        Form::component('mdCheckbox', 'components.form.checkbox', ['name', 'options', 'checked', 'attributes', 'label'=>null, 'field' => null]);
        Form::component('mdMultiSelect', 'components.form.multiselect', ['name', 'options', 'selected', 'attributes', 'label'=>null]);
        Form::component('mdRadio','components.form.radio',['name','options','checked','attributes']);
        Form::component('mdTimePicker', 'components.form.timepicker', ['name', 'value', 'attributes', 'label'=>null]);
        Form::component('mdDatePicker', 'components.form.datepicker', ['name', 'value', 'attributes', 'label'=>null]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
