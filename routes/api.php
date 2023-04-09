<?php
Route::get('v1/task', 'api\v1\Admin\TasksApiController@index');

Route::group(['prefix' => 'v1' , 'namespace' => 'Api\V1\Admin' ,'middleware' => ['auth:api']],
 function ()
{
    Route::post('task', 'asksApiController@store');

});
// Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
//     // Users
//     Route::apiResource('users', 'UsersApiController');

//     // Department Employees
//     Route::apiResource('department-employees', 'DepartmentEmployeesApiController');

//     // Departments
//     Route::apiResource('departments', 'DepartmentsApiController');

//     // Projects
//     Route::apiResource('projects', 'ProjectsApiController');

//     // Tasks
//     // Route::apiResource('tasks', 'TasksApiController');

// });
