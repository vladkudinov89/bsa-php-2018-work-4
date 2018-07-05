<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Commands_Spaceship as Commands;
use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;
use BinaryStudioAcademy\Game\User;


class Game
{
    
    private $commands;
    private $user;
    
    
    public function __construct()
    {
        $this->coins_counter = 0;
        $this->commands = (array)new Commands();
        $this->user = new User();
    }


    public function start(Reader $reader, Writer $writer): void
    {
        // TODO: Implement infinite loop and process user's input
        // Feel free to delete these lines
//        $writer->writeln("You can't play yet. Please read input and convert it to commands.");
//        $writer->writeln("Don't forget to create game's world.");
//        $writer->write("Type your name:");
//        $input = trim($reader->read());
//        $writer->writeln("Good luck with this task, {$input}!");
        $writer->writeln("Type 'help' to get information about commands.");
        while (count($this->user->userShip) != count($this->user->readyShip)) {
            $this->step($reader, $writer);
        }
    }

    public function run(Reader $reader, Writer $writer): void
    {
        // TODO: Implement step by step mode with game state persistence between steps
//        $writer->writeln("You can't play yet. Please read input and convert it to commands.");
//        $writer->writeln("Don't forget to create game's world.");
//        $this->step($reader, $writer);
            $this->step($reader, $writer);
    }

    private function step(Reader $reader, Writer $writer) :void
    {
        $input = explode(':', trim($reader->read()));

        $command = $input[0];

        $argument = $input[1] ?? '';

        $answer = $this->find_command($command, $argument);

        if (count($this->user->readyShip) == count($this->user->userShip)) {
            $answer = "===== Good job. You've completed this mission. Bye! =====";
            $this->status();

        }
        $writer->writeln($answer);

    }

    private function find_command(string $command, string $argument) :string
    {

        $commands = array_keys($this->commands['arrayCommands']);

        if (in_array($command, $commands)) {
            return $this->$command($argument);
        } else {
            return "\nUnknown command: '$command'. Try help";
        }
    }

    private function help(): string
    {
        $this->user->userHelp($this->commands['arrayCommands']);
        return '';
    }

    private function status(): string
    {
        $this->user->userStatus();
        return '';

    }

    private function build($argument) : string
    {

        $this->user->changeExistPart(trim($argument));

        return '';

    }

    private function mine($argument) : string
    {
       $this->user->mineResoure(trim($argument));

        return '';
    }

    private function scheme($argument) : string
    {
        if ($argument) {
            $this->user->schemeModules($argument);
//            print_r($this->user->schemeModules($argument));
        } else {
            return "Can not do Scheme: $argument" . PHP_EOL;
        }

        return '';
    }

    /**
     *  exit from game
     */
    private function exit(): void
    {
        exit;
    }
}
