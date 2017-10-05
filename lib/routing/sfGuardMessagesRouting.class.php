<?php

/**
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class sfGuardMessagesRouting
{
    public static function addRouteForAdminMessage(sfEvent $event)
    {
        $event->getSubject()->prependRoute('sf_guard_message', new sfPropelRouteCollection([
      'name'                 => 'sf_guard_message',
      'model'                => 'sfGuardMessage',
      'module'               => 'sfGuardMessage',
      'prefix_path'          => 'sf_guard_message',
      'with_wildcard_routes' => true,
      'requirements'         => [],
    ));
    }

    public static function addRouteForAdminMessagePriority(sfEvent $event)
    {
        $event->getSubject()->prependRoute('sf_guard_message_priority', new sfPropelRouteCollection([
      'name'                 => 'sf_guard_message_priority',
      'model'                => 'sfGuardMessagePriority',
      'module'               => 'sfGuardMessagePriority',
      'prefix_path'          => 'sf_guard_message_priority',
      'with_wildcard_routes' => true,
      'requirements'         => [],
    ]));
    }

    public static function addRouteForAdminMessageType(sfEvent $event)
    {
        $event->getSubject()->prependRoute('sf_guard_message_type', new sfPropelRouteCollection([
      'name'                 => 'sf_guard_message_type',
      'model'                => 'sfGuardMessageType',
      'module'               => 'sfGuardMessageType',
      'prefix_path'          => 'sf_guard_message_type',
      'with_wildcard_routes' => true,
      'requirements'         => [],
    ]));
    }
}
