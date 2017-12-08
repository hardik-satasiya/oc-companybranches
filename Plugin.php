<?php namespace HardikSatasiya\BranchManagement;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    public function registerComponents()
    {

    }

    public function registerSettings()
    {

    }


    public function boot() {

        \Backend\Models\User::extend(function ($model) {
            $model->hasOne['parentinfo'] = ['HardikSatasiya\BranchManagement\Models\Parentinfo'];
        });

        \Event::listen('backend.form.extendFields', function($widget) {

            // Only for the User controller
            if (!$widget->getController() instanceof \Backend\Controllers\Users) {
                return;
            }

            // Only for the User model
            if (!$widget->model instanceof \Backend\Models\User) {
                return;
            }


            $currUser = \BackendAuth::getUser();
            $result = [];
            foreach (\Backend\Models\User::where('id',  '!=', $currUser->id)->get() as $user) {
                if($user->hasPermission('company')) {
                    $result[$user->id] = $user->email . '(' . $user->first_name . ')';
                }
            }

            $currUser = \BackendAuth::getUser();
            $branches = [];
            foreach (\HardikSatasiya\BranchManagement\Models\Branch::all() as $branch) {
                $branches[$branch->id] = $branch->name;
            }

            $userMdl = $widget->model;
            if (!$userMdl->parentinfo) {
                 $parentinfo = new \HardikSatasiya\BranchManagement\Models\Parentinfo;
                 $userMdl->parentinfo = $parentinfo;
                 $userMdl->save();
             }

            // Add an extra description field
            $widget->addTabFields([
                'parentinfo[company_id]' => [
                    'tab'     => 'Branch Details',
                    'label'   => 'Company',
                    'type'    => 'dropdown',
                    'placeholder' => 'Select Company',
                    'options' => $result
                ],
                'parentinfo[branch_id]' => [
                    'tab'     => 'Branch Details',
                    'label'   => 'Branch',
                    'type'    => 'dropdown',
                    'placeholder' => 'Select Branch',
                    'options' => $branches
                ]
            ]);
        });

    }
}
