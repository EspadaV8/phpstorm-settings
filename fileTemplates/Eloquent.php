<?php
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

class ${NAME} extends \Eloquent
{
    protected \$guarded = ['id', 'created_at', 'updated_at'];
}