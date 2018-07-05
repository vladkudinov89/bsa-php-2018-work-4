<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Commands_Spaceship as Commands;
use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;

//use BinaryStudioAcademy\Game\Parts\PartsList;
//use BinaryStudioAcademy\Game\Resources\ResourceList;
use BinaryStudioAcademy\Game\User;
use LucidFrame\Console\ConsoleTable;


class Game
{

//    private $fire;
    private $commands;
    const COINS_TO_WIN = 5;
//    private $resourceList;
//    private $partsList;
    private $user;


//    const COMMANDS = [
//        'go'     => 'move user to room. Argument: <room>',
//        'status' => 'information about coins and room name',
//        'where'  => 'room name and possible variants',
//        'help'   => 'user help',
//        'observe'=> 'info about coins in room',
//        'grab'   => 'take 1 coin',
//        'exit'   => 'exit from game'
//    ];
//

    public function __construct()
    {
        $this->coins_counter = 0;
        $this->commands = (array)new Commands();
        $this->user = new User();
//        print_r($this->user->resourceList);
//        print_r($this->user->partsList);
//        foreach ($this->user->resourceList['stateResource'] as $key => $value) {
//            print_r($this->user->resourceList['stateResource'][$key]['name']);
//        }


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
        while (count($this->user->userShip) != count($this->user->readyShip)) {
            $this->step($reader, $writer);
        }
    }

    private function step(Reader $reader, Writer $writer) :void
    {
        $input = explode(':', trim($reader->read()));
//        print_r($input);
        $command = $input[0];
//        print_r($input[0]);

        $argument = $input[1] ?? '';
//        print_r("argument" . $argument);

        $answer = $this->find_command($command, $argument);
//        if ($this->check_win())
//            $answer = "Good job. You've completed this quest. Bye!";
        if (count($this->user->readyShip) == count($this->user->userShip)) {
            $answer = "Good job. You've completed this quest. Bye!";

        }
        $writer->writeln($answer);
    }

    private function find_command(string $command, string $argument) :string
    {

        $commands = array_keys($this->commands['arrayCommands']);
//        print_r($commands);

        if (in_array($command, $commands)) {
            return $this->$command($argument);
        } else {
            return "\nUnknown command: '$command'. Try help";
        }
    }

    private function help(): string
    {
        echo "\n--- Commands list: ---\n";

        $table = new ConsoleTable();
        $table
            ->setHeaders(array('Name Command', 'Description'));

        foreach ($this->commands['arrayCommands'] as $command => $info) {
            $table->addRow((array($command, $info)));
        }
        $table->display();
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
            return "Scheme : $argument" . PHP_EOL;
        } else {
            return "Can not do Scheme: $argument" . PHP_EOL;
        }
    }

    /**
     *  exit from game
     */
    private function exit(): void
    {
        exit;
    }
}
