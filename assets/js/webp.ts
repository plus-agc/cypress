// webp.ts
import { readdir, mkdir } from "fs/promises";
import { extname, join, parse } from "path";
import sharp from "sharp";

const inputDir = "../../assets/images";
const outputDir = "./webp";

await mkdir(outputDir, { recursive: true });
async function getFiles(dir: string): Promise<string[]> {
    const dirents = await readdir(dir, { withFileTypes: true });
    const files = await Promise.all(
        dirents.map((dirent) => {
            const res = join(dir, dirent.name);
            return dirent.isDirectory() ? getFiles(res) : res;
        })
    );
    return files.flat();
}

const allFiles = await getFiles(inputDir);
const imageFiles = allFiles.filter(file => {
    const ext = extname(file).toLowerCase();
    return [".webp", ".jpeg", ".png"].includes(ext);
});

console.log(`処理を開始します。画像ファイル数: ${imageFiles.length}`);

for (const file of imageFiles) {
    const ext = extname(file).toLowerCase();
    if (![".webp", ".jpeg", ".png"].includes(ext)) continue;

    const inputPath = join(inputDir, file);
    const outputPath = join(outputDir, parse(file).name + ".webp");

    try {
        const img = await sharp(inputPath)
            .webp({ quality: 80 })
            .toFile(outputPath);
        console.log(`変換完了: ${file} -> ${outputPath} (サイズ: ${img.size} bytes)`);
    } catch (error) {
        console.error(`エラー: ${file}: ${error.message}`);
        if (error.stack) {
            console.error(error.stack);
        }
    console.log(`完了: ${file}`);
    }
}
