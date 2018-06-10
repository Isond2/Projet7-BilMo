<?php
// AppBundle\Command\CreateOAuthClientCommand.php
namespace AppBundle\Command;

use OAuth2\OAuth2;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateOauthClientCommand extends ContainerAwareCommand
{
  protected function configure()
  {
    $this
      ->setName('app:oauth-client:create')
      ->setDescription('Create a new OAuth client')
      ->addArgument('redirect_url', null, InputArgument::REQUIRED, 'Url redirection after authorization');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
        if ($input->getArgument('redirect_url')) {
            $url = $input->getArgument('redirect_url');
        }

        $clientManager = $this->getContainer()->get('fos_oauth_server.client_manager.default');
        $client = $clientManager->createClient();
        $client->setRedirectUris(array($url));
        $client->setAllowedGrantTypes(array('password', 'refresh_token'));
        $clientManager->updateClient($client);
        $output->writeln("Added a new client with client_id : <info>".$client->getPublicId()."</info> and client_secret : <info>".$client->getSecret()."</info>");
  }
}