<?php

namespace ContainerQST5QRU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WdFU0AcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WdFU0Ac' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WdFU0Ac'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AdminController::configureUserMenu' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\Admin\\CommentCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\CommentCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\CommentCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\CommentCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\CommentCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\CommentCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\CommentCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\CommentCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\CommentCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\CommentCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\CommentCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\CommentCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\CommentCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PostsCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\PostsCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\PostsCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\PostsCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\PostsCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\PostsCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PostsCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PostsCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\PostsCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PostsCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PostsCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PostsCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PostsCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\CommentController::addComment' => ['privates', '.service_locator.7bZDyil', 'get_ServiceLocator_7bZDyilService', true],
            'App\\Controller\\FrontController::mainPage' => ['privates', '.service_locator..ut3Lqt', 'get_ServiceLocator__Ut3LqtService', true],
            'App\\Controller\\FrontController::post' => ['privates', '.service_locator.HPc.Pdu', 'get_ServiceLocator_HPc_PduService', true],
            'App\\Controller\\FrontController::postList' => ['privates', '.service_locator.c8xI0F9', 'get_ServiceLocator_C8xI0F9Service', true],
            'App\\Controller\\FrontController::removePost' => ['privates', '.service_locator.Abb4RZ.', 'get_ServiceLocator_Abb4RZ_Service', true],
            'App\\Controller\\FrontController::showPost' => ['privates', '.service_locator.cZq80P_', 'get_ServiceLocator_CZq80PService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.ztkjRWS', 'get_ServiceLocator_ZtkjRWSService', true],
            'App\\Controller\\SecurityController::changePassword' => ['privates', '.service_locator.YWClx0k', 'get_ServiceLocator_YWClx0kService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\Admin\\AdminController:configureUserMenu' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\Admin\\CommentCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\CommentCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\CommentCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\CommentCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\CommentCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\CommentCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\CommentCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\CommentCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\CommentCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\CommentCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\CommentCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\CommentCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\CommentCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\CommentCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PostsCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\PostsCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\PostsCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\PostsCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\PostsCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\PostsCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PostsCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PostsCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\PostsCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PostsCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PostsCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PostsCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PostsCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PostsCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\CommentController:addComment' => ['privates', '.service_locator.7bZDyil', 'get_ServiceLocator_7bZDyilService', true],
            'App\\Controller\\FrontController:mainPage' => ['privates', '.service_locator..ut3Lqt', 'get_ServiceLocator__Ut3LqtService', true],
            'App\\Controller\\FrontController:post' => ['privates', '.service_locator.HPc.Pdu', 'get_ServiceLocator_HPc_PduService', true],
            'App\\Controller\\FrontController:postList' => ['privates', '.service_locator.c8xI0F9', 'get_ServiceLocator_C8xI0F9Service', true],
            'App\\Controller\\FrontController:removePost' => ['privates', '.service_locator.Abb4RZ.', 'get_ServiceLocator_Abb4RZ_Service', true],
            'App\\Controller\\FrontController:showPost' => ['privates', '.service_locator.cZq80P_', 'get_ServiceLocator_CZq80PService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.ztkjRWS', 'get_ServiceLocator_ZtkjRWSService', true],
            'App\\Controller\\SecurityController:changePassword' => ['privates', '.service_locator.YWClx0k', 'get_ServiceLocator_YWClx0kService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\Admin\\AdminController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\CommentCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController::delete' => '?',
            'App\\Controller\\Admin\\CommentCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CommentCrudController::detail' => '?',
            'App\\Controller\\Admin\\CommentCrudController::edit' => '?',
            'App\\Controller\\Admin\\CommentCrudController::index' => '?',
            'App\\Controller\\Admin\\CommentCrudController::new' => '?',
            'App\\Controller\\Admin\\CommentCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CommentCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CommentCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\PostsCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\PostsCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\PostsCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\PostsCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\PostsCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\PostsCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PostsCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\PostsCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PostsCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PostsCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\PostsCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PostsCrudController::delete' => '?',
            'App\\Controller\\Admin\\PostsCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\PostsCrudController::detail' => '?',
            'App\\Controller\\Admin\\PostsCrudController::edit' => '?',
            'App\\Controller\\Admin\\PostsCrudController::index' => '?',
            'App\\Controller\\Admin\\PostsCrudController::new' => '?',
            'App\\Controller\\Admin\\PostsCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\PostsCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\PostsCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::detail' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => '?',
            'App\\Controller\\CommentController::addComment' => '?',
            'App\\Controller\\FrontController::mainPage' => '?',
            'App\\Controller\\FrontController::post' => '?',
            'App\\Controller\\FrontController::postList' => '?',
            'App\\Controller\\FrontController::removePost' => '?',
            'App\\Controller\\FrontController::showPost' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::changePassword' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\AdminController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\CommentCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController:delete' => '?',
            'App\\Controller\\Admin\\CommentCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CommentCrudController:detail' => '?',
            'App\\Controller\\Admin\\CommentCrudController:edit' => '?',
            'App\\Controller\\Admin\\CommentCrudController:index' => '?',
            'App\\Controller\\Admin\\CommentCrudController:new' => '?',
            'App\\Controller\\Admin\\CommentCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CommentCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CommentCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\PostsCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\PostsCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\PostsCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\PostsCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\PostsCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\PostsCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PostsCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\PostsCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PostsCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PostsCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\PostsCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PostsCrudController:delete' => '?',
            'App\\Controller\\Admin\\PostsCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\PostsCrudController:detail' => '?',
            'App\\Controller\\Admin\\PostsCrudController:edit' => '?',
            'App\\Controller\\Admin\\PostsCrudController:index' => '?',
            'App\\Controller\\Admin\\PostsCrudController:new' => '?',
            'App\\Controller\\Admin\\PostsCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\PostsCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\PostsCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:detail' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => '?',
            'App\\Controller\\CommentController:addComment' => '?',
            'App\\Controller\\FrontController:mainPage' => '?',
            'App\\Controller\\FrontController:post' => '?',
            'App\\Controller\\FrontController:postList' => '?',
            'App\\Controller\\FrontController:removePost' => '?',
            'App\\Controller\\FrontController:showPost' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:changePassword' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
