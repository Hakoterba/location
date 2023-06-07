<?php

namespace Container5anMBxe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BtYHQpJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BtYHQpJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BtYHQpJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\ReservationCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ReservationCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ReservationCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ReservationCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\VoitureCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\VoitureCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\VoitureCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\VoitureCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\VoitureCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\VoitureCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\VoitureCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\VoitureCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\VoitureCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\VoitureCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\VoitureCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\VoitureCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\VoitureCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\VoitureCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.v.Ev_hT', 'get_ServiceLocator_V_EvHTService', true],
            'App\\Controller\\ReservationController::delete' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\ReservationController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\ReservationController::show' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::update' => ['privates', '.service_locator.Bkb9ues', 'get_ServiceLocator_Bkb9uesService', true],
            'App\\Controller\\VoitureController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\VoitureController::show' => ['privates', '.service_locator.6fkHgaW', 'get_ServiceLocator_6fkHgaWService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\ReservationCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ReservationCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ReservationCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ReservationCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\VoitureCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\VoitureCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\VoitureCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\VoitureCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\VoitureCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\VoitureCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\VoitureCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\VoitureCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\VoitureCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\VoitureCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\VoitureCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\VoitureCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\VoitureCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\VoitureCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\VoitureCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.v.Ev_hT', 'get_ServiceLocator_V_EvHTService', true],
            'App\\Controller\\ReservationController:delete' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\ReservationController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\ReservationController:show' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:update' => ['privates', '.service_locator.Bkb9ues', 'get_ServiceLocator_Bkb9uesService', true],
            'App\\Controller\\VoitureController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\VoitureController:show' => ['privates', '.service_locator.6fkHgaW', 'get_ServiceLocator_6fkHgaWService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::delete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::detail' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::edit' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::index' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::new' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::delete' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::detail' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::edit' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::index' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::new' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\VoitureCrudController::updateEntity' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ReservationController::delete' => '?',
            'App\\Controller\\ReservationController::index' => '?',
            'App\\Controller\\ReservationController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::update' => '?',
            'App\\Controller\\VoitureController::index' => '?',
            'App\\Controller\\VoitureController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:delete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:detail' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:edit' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:index' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:new' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:delete' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:detail' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:edit' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:index' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:new' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\VoitureCrudController:updateEntity' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ReservationController:delete' => '?',
            'App\\Controller\\ReservationController:index' => '?',
            'App\\Controller\\ReservationController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:update' => '?',
            'App\\Controller\\VoitureController:index' => '?',
            'App\\Controller\\VoitureController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}