<?php
namespace MegaDelight\CustomApi\Model\Api;
use Psr\Log\LoggerInterface;
class Custom
{
    protected $logger;
    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }
    /**
     * @inheritdoc
     */
    public function getPost($value1)
    {
        $response = ['success' => false];
        try {
            // Your Code here
            $response = ['success' => true, 'message' => $value1];
        } catch (\Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
            $this->logger->info($e->getMessage());
        }
        $returnArray = json_encode($response);
        return $returnArray; 
   }
}   