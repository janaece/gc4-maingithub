update <<GC_SCHEMA_NAME>>.mhr_event_subscription set callfunction = 'gcr_delete_user_event_listener' where callfunction = 'GcrMaharaEventListeners::deleteUser';