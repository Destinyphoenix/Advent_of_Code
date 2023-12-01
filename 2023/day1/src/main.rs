use std::fs::File;
use std::io::{self, BufRead};
use std::path::Path;

fn main() {
    let mut result:i32 = 0;
    if let Ok(lines) = read_lines("data.txt") {
        for line in lines {
            if let Ok(current) = line {
                let number = extract_numbers(current.as_str());
                println!("{}", number);
                result += number;
            } else {
                eprintln!("Error reading line from file");
            }
        }
    } else {
        eprintln!("Error opening the file");
    }
    println!("{}", result);
}
fn read_lines<P>(filename: P) -> io::Result<io::Lines<io::BufReader<File>>>
where
    P: AsRef<Path>,
{
    let file = File::open(filename)?;
    Ok(io::BufReader::new(file).lines())
}

fn extract_numbers(input_string: &str) -> i32 {
    let mut first_digit: Option<char> = None;
    let mut last_digit: Option<char> = None;

    for c in input_string.chars() {
        if c.is_numeric() {
            if first_digit.is_none() {
                first_digit = Some(c);
            }
            last_digit = Some(c);
        }
    }
    let mut result_str = String::new();
    if let Some(first) = first_digit {
        result_str.push(first);
    }
    if let Some(last) = last_digit {
        result_str.push(last);
    }
    let result = result_str.parse::<i32>().unwrap_or(0);
    result
}
