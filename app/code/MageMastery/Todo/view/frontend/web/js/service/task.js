define(['mage/storage'], function(storage) {
    'use strict';

    return {
        getList: async function () {
            return await storage.get('rest/V1/customer/todo/tasks')
        },

        update: async function (taskId, status) {
            return await storage.post(
                'rest/V1/customer/todo/task/update',
                JSON.stringify({
                    taskId: taskId,
                    status: status
                })
            )   
        }
    };
});