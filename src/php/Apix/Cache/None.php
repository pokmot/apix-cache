<?php

/**
 *
 * This file is part of the Apix Project.
 *
 * (c) Franck Cassedanne <franck at ouarz.net>
 *
 * @license     http://opensource.org/licenses/BSD-3-Clause  New BSD License
 *
 */

namespace Apix\Cache;

/**
 * Fake cache wrapper.
 *
 * @author Franck Cassedanne <franck at ouarz.net>
 */
class None extends AbstractCache
{


  /**
   * Constructor. Sets the Mongo DB adapter.
   *
   */
    public function __construct()
    {
        // Fake, so no adapter, no options
        parent::__construct(null, null);
    }

    /**
     * {@inheritdoc}
     */
    public function loadKey($key)
    {
        // Always return null as we don't store any data
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function loadTag($tag)
    {
        // Always return null as we don't store any data
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function save($data, $key, array $tags=null, $ttl=null)
    {
        // Always return true as we don't store any data, yet we don't want the operation to be flagged as "failed"
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function clean(array $tags)
    {
        // Always return true as we don't store any data, yet we don't want the operation to be flagged as "failed"
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function delete($key)
    {
        // Always return true as we don't store any data, yet we don't want the operation to be flagged as "failed"
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function flush($all=false)
    {
        // Always return true as we don't store any data, yet we don't want the operation to be flagged as "failed"
        return true;
    }

}
