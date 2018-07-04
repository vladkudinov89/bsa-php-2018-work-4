<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Commands_Spaceship as Commands;
use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;
use BinaryStudioAcademy\Game\Resources\AbstractResource;
//use BinaryStudioAcademy\Game\Resources\Fire;
use BinaryStudioAcademy\Game\Resources\ResourceList;
use LucidFrame\Console\ConsoleTable;


class Game
{

//    private $fire;
    private $commands;
    const COINS_TO_WIN = 5;
    private $resourceList;


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

    public static $buildFunct = [
        'build:shell' => "Inventory should have: metal,fire.",
        'porthole' => "Inventory should have: sand,fire."
    ];

    public function __construct()
    {
        $this->coins_counter = 0;
        $this->commands = (array)new Commands();
//        $this->fire =  new Fire();
        $this->resourceList = (array)new ResourceList;

//        print_r($this->resourceList);
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
        while ($this->coins_counter < self::COINS_TO_WIN) {
            $this->step($reader, $writer);
        }
    }

    public function run(Reader $reader, Writer $writer): void
    {
        // TODO: Implement step by step mode with game state persistence between steps
//        $writer->writeln("You can't play yet. Please read input and convert it to commands.");
//        $writer->writeln("Don't forget to create game's world.");
        $this->step($reader, $writer);
    }

    private function step(Reader $reader, Writer $writer) :void
    {
        $input = explode(' ', trim($reader->read()));
//        print_r($input);
        $command = $input[0];
        $argument = $input[1] ?? '';
//        $test = explode(':' , $argument);
//        print_r($test);
        $answer = $this->find_answer($command, $argument);
//        if ($this->check_win())
//            $answer = "Good job. You've completed this quest. Bye!";
        $writer->writeln($answer);
    }

    private function find_answer(string $command, string $argument) :string
    {

        $commands = array_keys($this->commands['arrayCommands']);
//        print_r($commands);

        if (in_array($command, $commands)) {
            return $this->$command($argument);
        } else {
            return "Unknown command: '$command'. Try help";
        }
    }

    private function h(): string
    {
        $result = "\nCommands list: \n";
        foreach ($this->commands['arrayCommands'] as $command => $info) {
            $result .= "$command : $info" . PHP_EOL;
        }
        return $result;
    }

    private function s()
    {

//
//        $tbl = new Console_Table();
//
//        $tbl->setHeaders(array('Language', 'Year'));
//
//        $tbl->addRow(array('PHP', 1994));
//        $tbl->addRow(array('C',   1970));
//        $tbl->addRow(array('C++', 1983));

        //require '/src/LucidFrame/Console/ConsoleTable.php';

        $table = new ConsoleTable();
//        $table
//            ->addHeader('Name')
//            ->addHeader('Count')
//
//            ->addRow(array('PHP', 1994))
//            ->addBorderLine()
//
//            ->display()
//        ;
        $table = new ConsoleTable();
        $table
            ->setHeaders(array('Name Resource', 'Amount'));

        foreach ($this->resourceList['stateResource'] as $row) {
            $table->addRow(array_values($row));
        }
        $table->display();

        $result = "\n--- Status list: --- \n";
//        $mask = "|%5s |%-30s | x |\n";
//        printf($mask, 'Num', 'Title');
//        printf($mask, '1', 'A value that fits the cell');
//        printf($mask, '2', 'A too long value that will brake the table');
//        for ($i = 0; $i < count($this->resourceList['stateResource']); $i++) {
//            foreach ($this->resourceList['stateResource'][$i] as $key => $value) {
//                $result .= "$key : $value" . PHP_EOL;
//            }
//        }

//        return $result;


        return true;
    }

    private function build(): string
    {

//        $input = explode(':', trim($reader->read()));
//        $writer->writeln($input);

//        if ($build)
//        {
//            return "Build : $build" . PHP_EOL;
//        }
//        else
//        {
//            return "Can not build : $build" . PHP_EOL;
//        }

        $result = "\nBuilt commands list: \n";
        foreach (SELF::$buildFunct as $command => $info) {
            $result .= "$command : $info" . PHP_EOL;
        }
        return $result;

    }

    /**
     *  exit from game
     */
    private function exit(): void
    {
        exit;
    }
}
