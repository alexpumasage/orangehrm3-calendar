<?php

/**
 * WorkflowStateMachineTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class WorkflowStateMachineTable extends PluginWorkflowStateMachineTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object WorkflowStateMachineTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('WorkflowStateMachine');
    }
}